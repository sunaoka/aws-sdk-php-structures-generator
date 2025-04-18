<?php

namespace Sunaoka\Aws\Structures\AppSync\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lambdaConflictHandlerArn
 */
class LambdaConflictHandlerConfig extends Shape
{
    /**
     * @param array{lambdaConflictHandlerArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
