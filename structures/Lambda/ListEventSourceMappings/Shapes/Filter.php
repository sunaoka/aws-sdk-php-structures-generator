<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Pattern
 */
class Filter extends Shape
{
    /**
     * @param array{Pattern?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
