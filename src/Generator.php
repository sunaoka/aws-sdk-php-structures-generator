<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator;

use Sunaoka\Aws\Structures\Generator\Shapes\Structures;
use Sunaoka\Aws\Structures\Generator\Shapes\Types;

/**
 * @phpstan-import-type DataShape from \Sunaoka\Aws\Structures\Generator\Commands\GeneratorCommand
 * @phpstan-import-type Data      from \Sunaoka\Aws\Structures\Generator\Commands\GeneratorCommand
 */
readonly class Generator
{
    /**
     * @param Data $data
     */
    public function __construct(
        private array $data,
        private string $namespace,
    ) {}

    /**
     * @param callable(string $fqcn, string $code): void $callback
     */
    public function run(callable $callback): void
    {
        $types = new Types($this->retrievePrimitiveTypes());

        $structures = new Structures();
        foreach ($this->data['shapes'] as $name => $shape) {
            $structures->aliases->add($name);
            if ($shape['type'] === 'structure') {
                $structures->add($name);
            }
        }

        foreach (array_keys($this->data['operations']) as $action) {
            $parser = new Parser($this->data, $action, $types, $structures);
            $model = new Model($parser, $this->namespace);
            $model->generate($callback);
        }
    }

    /**
     * @return array<string, string>
     */
    protected function retrievePrimitiveTypes(): array
    {
        $types = [];
        foreach ($this->data['shapes'] as $name => $shape) {
            $type = $this->resolvePrimitiveTypes($shape);
            if ($type !== null) {
                $types[$name] = $type;
            }
        }

        return $types;
    }

    /**
     * @param DataShape $shape
     */
    protected function resolvePrimitiveTypes(array $shape): ?string
    {
        if (isset($shape['enum'])) {
            return implode('|', array_map(function ($value) {
                return "'{$value}'";
            }, $shape['enum']));
        }

        return match ($shape['type']) {
            'string', 'byte', 'character', 'blob' => 'string',
            'integer', 'long' => 'int',
            'float'     => 'float',
            'double'    => 'double',
            'boolean'   => 'bool',
            'timestamp' => '\Aws\Api\DateTimeResult',
            'list', 'map', 'structure' => null,
            default => throw new \InvalidArgumentException("Unknown type: {$shape['type']}"),
        };
    }
}
