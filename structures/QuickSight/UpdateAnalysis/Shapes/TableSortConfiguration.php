<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $RowSort
 * @property PaginationConfiguration|null $PaginationConfiguration
 */
class TableSortConfiguration extends Shape
{
    /**
     * @param array{
     *     RowSort?: list<FieldSortOptions>|null,
     *     PaginationConfiguration?: PaginationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
