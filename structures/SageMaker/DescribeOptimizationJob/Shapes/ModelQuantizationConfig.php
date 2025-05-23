<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Image
 * @property array<string, string>|null $OverrideEnvironment
 */
class ModelQuantizationConfig extends Shape
{
    /**
     * @param array{
     *     Image?: string|null,
     *     OverrideEnvironment?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
