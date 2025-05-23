<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Horizontal
 */
class PositionalAccuracy extends Shape
{
    /**
     * @param array{Horizontal: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
