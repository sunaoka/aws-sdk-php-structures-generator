<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutePedestrianPlace $Place
 * @property string|null $Time
 */
class RoutePedestrianArrival extends Shape
{
    /**
     * @param array{
     *     Place: RoutePedestrianPlace,
     *     Time?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
