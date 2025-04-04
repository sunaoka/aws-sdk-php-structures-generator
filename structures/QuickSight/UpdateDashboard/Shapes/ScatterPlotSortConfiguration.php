<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ItemsLimitConfiguration|null $ScatterPlotLimitConfiguration
 */
class ScatterPlotSortConfiguration extends Shape
{
    /**
     * @param array{ScatterPlotLimitConfiguration?: ItemsLimitConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
