<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolSpecification|null $toolSpec
 */
class Tool extends Shape
{
    /**
     * @param array{toolSpec?: ToolSpecification|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
