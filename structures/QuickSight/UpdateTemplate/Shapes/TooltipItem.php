<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldTooltipItem|null $FieldTooltipItem
 * @property ColumnTooltipItem|null $ColumnTooltipItem
 */
class TooltipItem extends Shape
{
    /**
     * @param array{
     *     FieldTooltipItem?: FieldTooltipItem|null,
     *     ColumnTooltipItem?: ColumnTooltipItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
