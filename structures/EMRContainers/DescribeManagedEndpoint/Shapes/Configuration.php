<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeManagedEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $classification
 * @property array<string, string>|null $properties
 * @property list<Configuration>|null $configurations
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     classification: string,
     *     properties?: array<string, string>|null,
     *     configurations?: list<Configuration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
