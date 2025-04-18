<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ToolUseBlockStart|null $toolUse
 */
class ContentBlockStart extends Shape
{
    /**
     * @param array{toolUse?: ToolUseBlockStart|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
