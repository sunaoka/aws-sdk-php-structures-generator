<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property PivotTableSortBy $SortBy
 */
class PivotFieldSortOptions extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     SortBy: PivotTableSortBy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
