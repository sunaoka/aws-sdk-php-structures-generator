<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaterfallChartGroupColorConfiguration|null $GroupColorConfiguration
 */
class WaterfallChartColorConfiguration extends Shape
{
    /**
     * @param array{GroupColorConfiguration?: WaterfallChartGroupColorConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
