<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $Duration
 * @property string|null $Instruction
 * @property 'Board' $Type
 */
class RouteFerryBeforeTravelStep extends Shape
{
    /**
     * @param array{
     *     Duration: int<0, 4294967295>,
     *     Instruction?: string|null,
     *     Type: 'Board'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
