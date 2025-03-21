<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccuratePolylineUnavailable'|'NoSchedule'|'Other'|'ViolatedAvoidFerry'|'ViolatedAvoidRailFerry'|'SeasonalClosure' $Code
 * @property 'High'|'Low'|null $Impact
 */
class RouteFerryNotice extends Shape
{
    /**
     * @param array{
     *     Code: 'AccuratePolylineUnavailable'|'NoSchedule'|'Other'|'ViolatedAvoidFerry'|'ViolatedAvoidRailFerry'|'SeasonalClosure',
     *     Impact?: 'High'|'Low'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
