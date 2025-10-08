<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator;

use Sunaoka\Aws\Structures\Generator\Shapes\Structures;
use Sunaoka\Aws\Structures\Generator\Shapes\Types;

/**
 * @phpstan-import-type DataShape from \Sunaoka\Aws\Structures\Generator\Commands\GeneratorCommand
 * @phpstan-import-type Data      from \Sunaoka\Aws\Structures\Generator\Commands\GeneratorCommand
 */
class Generator
{
    /**
     * @var string[]
     */
    private array $traits = [];

    /**
     * @var string[]
     *
     * @see https://github.com/aws/aws-sdk-php/issues/3194
     */
    private const array IGNORE_OPERATIONS = [
        'GetApi',
        'GetCommand',
        'GetCredentials',
        'GetEndpoint',
        'GetToken',
    ];

    /**
     * @param Data $data
     */
    public function __construct(
        private readonly array $data,
        private readonly string $namespace,
    ) {}

    /**
     * @param callable(string $fqcn, string $code): void $callback
     */
    public function generateModel(callable $callback): self
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
            if (in_array($action, self::IGNORE_OPERATIONS, true)) {
                continue;
            }

            $parser = new Parser($this->data, $action, $types, $structures);
            $model = new Model($parser, $this->namespace);
            $model->generate(function (string $fqcn, string $code, string $type) use ($callback) {
                if ($type === 'trait') {
                    $this->traits[] = $fqcn;
                }
                $callback($fqcn, $code);
            });
        }

        return $this;
    }

    /**
     * @param callable(string $fqcn, string $code): void $callback
     */
    public function generateClient(callable $callback): void
    {
        new Client($this->namespace, $this->traits)->generate($callback);
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
     *
     * @see https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_streams.html
     */
    protected function resolvePrimitiveTypes(array $shape): ?string
    {
        if (isset($shape['enum'])) {
            return implode('|', array_map(function ($value) {
                return "'{$value}'";
            }, $shape['enum']));
        }

        return match ($shape['type']) {
            'string', 'byte', 'character' => 'string',
            'integer', 'long' => (fn() => match (true) {
                isset($shape['min'], $shape['max']) => "int<{$shape['min']}, {$shape['max']}>",
                isset($shape['min'])                => "int<{$shape['min']}, max>",
                isset($shape['max'])                => "int<min, {$shape['max']}>",
                default                             => 'int',
            })(),
            'float'     => 'float',
            'double'    => 'double',
            'boolean'   => 'bool',
            'timestamp' => '\Aws\Api\DateTimeResult',
            'blob', 'list', 'map', 'structure' => null,
            default => throw new \InvalidArgumentException("Unknown type: {$shape['type']}"),
        };
    }
}
