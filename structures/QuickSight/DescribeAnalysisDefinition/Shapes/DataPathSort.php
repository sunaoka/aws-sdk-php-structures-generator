<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASC'|'DESC' $Direction
 * @property list<DataPathValue> $SortPaths
 */
class DataPathSort extends Shape
{
    /**
     * @param array{
     *     Direction: 'ASC'|'DESC',
     *     SortPaths: list<DataPathValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
