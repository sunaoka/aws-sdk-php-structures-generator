<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator;

use Sunaoka\Aws\Structures\Generator\Shapes\Structures;
use Sunaoka\Aws\Structures\Generator\Shapes\Types;

/**
 * @phpstan-import-type DataShapeStructure from \Sunaoka\Aws\Structures\Generator\Commands\GeneratorCommand
 * @phpstan-import-type DataShapeMap       from \Sunaoka\Aws\Structures\Generator\Commands\GeneratorCommand
 * @phpstan-import-type DataShapeList      from \Sunaoka\Aws\Structures\Generator\Commands\GeneratorCommand
 * @phpstan-import-type Data               from \Sunaoka\Aws\Structures\Generator\Commands\GeneratorCommand
 */
class Parser
{
    public ?string $request = null;

    public ?string $response = null;

    /**
     * @var list<string>
     */
    public array $shapes = [];

    /**
     * @param Data $data
     */
    public function __construct(
        public readonly array $data,
        public readonly string $action,
        public readonly Types $types,
        public readonly Structures $structures,
    ) {}

    public function parse(): void
    {
        $operation = $this->data['operations'][$this->action];

        // Shape
        $shapes = [];

        // Request
        if (isset($operation['input']['shape'])) {
            $this->request = $operation['input']['shape'];
            $shapes = $this->retrieveShape($this->request, $this->request, $shapes);
        }

        // Response
        if (isset($operation['output']['shape'])) {
            $this->response = $operation['output']['shape'];
            $this->retrieveShape($this->response, $this->response, $shapes);
        }

        $this->shapes = array_values(array_unique($this->shapes));
    }

    /**
     * @param list<string> $shapes
     *
     * @return list<string>
     */
    protected function retrieveShape(string $baseShapeName, string $shapeName, array $shapes = []): array
    {
        if (in_array($shapeName, $shapes, true)) {
            return $shapes;
        }

        // echo '  -> ', $shapeName, PHP_EOL;

        $shapes[] = $shapeName;

        $shape = $this->data['shapes'][$shapeName];

        switch ($shape['type']) {
            case 'list':
                /** @var DataShapeList $shape */
                $shapes = $this->retrieveShape($baseShapeName, $shape['member']['shape'], $shapes);

                if ($this->types->has($shape['member']['shape'])) {
                    $this->types->add($shapeName, sprintf(
                        'list<%s>',
                        $this->types->get($shape['member']['shape']),
                    ));

                } elseif ($this->structures->has($shape['member']['shape'])) {
                    $this->types->add($shapeName, sprintf(
                        'list<Shapes\%s>',
                        $this->structures->get($shape['member']['shape']),
                    ));

                } else {
                    throw new \RuntimeException("Invalid list: {$shapeName}");
                }

                break;

            case 'map':
                /** @var DataShapeMap $shape */
                $shapes = $this->retrieveShape($baseShapeName, $shape['key']['shape'], $shapes);
                $shapes = $this->retrieveShape($baseShapeName, $shape['value']['shape'], $shapes);

                if ($this->types->has($shape['key']['shape']) && $this->types->has($shape['value']['shape'])) {
                    $this->types->add($shapeName, sprintf(
                        'array<%s, %s>',
                        $this->types->get($shape['key']['shape']),
                        $this->types->get($shape['value']['shape']),
                    ));

                } elseif ($this->structures->has($shape['key']['shape']) && $this->structures->has($shape['value']['shape'])) {
                    $this->types->add($shapeName, sprintf(
                        'array<Shapes\%s, Shapes\%s>',
                        $this->structures->get($shape['key']['shape']),
                        $this->structures->get($shape['value']['shape']),
                    ));

                } elseif ($this->types->has($shape['key']['shape']) && $this->structures->has($shape['value']['shape'])) {
                    $this->types->add($shapeName, sprintf(
                        'array<%s, Shapes\%s>',
                        $this->types->get($shape['key']['shape']),
                        $this->structures->get($shape['value']['shape']),
                    ));

                } elseif ($this->structures->has($shape['key']['shape']) && $this->types->has($shape['value']['shape'])) {
                    $this->types->add($shapeName, sprintf(
                        'array<Shapes\%s, %s>',
                        $this->structures->get($shape['key']['shape']),
                        $this->types->get($shape['value']['shape']),
                    ));

                } else {
                    throw new \RuntimeException("Invalid map: {$shapeName}");
                }

                break;

            case 'structure':
                if ($baseShapeName !== $shapeName) {
                    $this->shapes[] = $shapeName;
                }

                /** @var DataShapeStructure $shape */
                if (count($shape['members']) > 0) {
                    foreach ($shape['members'] as $member) {
                        $shapes = $this->retrieveShape($baseShapeName, $member['shape'], $shapes);
                    }
                }

                break;

            case 'string':
            case 'byte':
            case 'character':
            case 'blob':
            case 'integer':
            case 'long':
            case 'float':
            case 'double':
            case 'boolean':
            case 'timestamp':
                if (! $this->types->has($shapeName)) {
                    $this->types->add($shapeName, $shape['type']);
                }

                break;

            default:
                throw new \InvalidArgumentException("Unknown type: {$shape['type']}");
        }

        return $shapes;
    }
}
