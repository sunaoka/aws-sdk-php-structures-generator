<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialLineStyle $Style
 */
class GeospatialLineLayer extends Shape
{
    /**
     * @param array{Style: GeospatialLineStyle} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
