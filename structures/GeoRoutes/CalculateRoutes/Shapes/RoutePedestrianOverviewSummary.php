<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $Distance
 * @property int<0, 4294967295> $Duration
 */
class RoutePedestrianOverviewSummary extends Shape
{
    /**
     * @param array{
     *     Distance: int<0, 4294967295>,
     *     Duration: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
