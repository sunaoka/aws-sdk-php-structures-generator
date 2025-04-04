<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property list<string> $CategoryValues
 */
class CategoryDrillDownFilter extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     CategoryValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
