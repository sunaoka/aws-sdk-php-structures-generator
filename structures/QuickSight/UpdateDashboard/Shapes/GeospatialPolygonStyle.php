<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialPolygonSymbolStyle|null $PolygonSymbolStyle
 */
class GeospatialPolygonStyle extends Shape
{
    /**
     * @param array{PolygonSymbolStyle?: GeospatialPolygonSymbolStyle|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
