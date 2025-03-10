<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrimarySource
 */
class SourcePriority extends Shape
{
    /**
     * @param array{PrimarySource?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
