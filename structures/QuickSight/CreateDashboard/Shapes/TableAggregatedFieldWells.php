<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $GroupBy
 * @property list<MeasureField>|null $Values
 */
class TableAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     GroupBy?: list<DimensionField>|null,
     *     Values?: list<MeasureField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
