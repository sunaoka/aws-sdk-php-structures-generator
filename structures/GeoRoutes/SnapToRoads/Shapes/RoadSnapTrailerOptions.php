<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 255>|null $TrailerCount
 */
class RoadSnapTrailerOptions extends Shape
{
    /**
     * @param array{TrailerCount?: int<0, 255>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
