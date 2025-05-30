<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $CategorySort
 * @property ItemsLimitConfiguration|null $CategoryItemsLimit
 * @property list<FieldSortOptions>|null $ColorSort
 * @property ItemsLimitConfiguration|null $ColorItemsLimit
 */
class RadarChartSortConfiguration extends Shape
{
    /**
     * @param array{
     *     CategorySort?: list<FieldSortOptions>|null,
     *     CategoryItemsLimit?: ItemsLimitConfiguration|null,
     *     ColorSort?: list<FieldSortOptions>|null,
     *     ColorItemsLimit?: ItemsLimitConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
