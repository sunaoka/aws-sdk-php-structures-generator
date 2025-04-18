<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialMapAggregatedFieldWells|null $GeospatialMapAggregatedFieldWells
 */
class GeospatialMapFieldWells extends Shape
{
    /**
     * @param array{GeospatialMapAggregatedFieldWells?: GeospatialMapAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
