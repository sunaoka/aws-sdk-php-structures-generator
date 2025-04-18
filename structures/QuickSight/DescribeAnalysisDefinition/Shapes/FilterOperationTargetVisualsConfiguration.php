<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SameSheetTargetVisualConfiguration|null $SameSheetTargetVisualConfiguration
 */
class FilterOperationTargetVisualsConfiguration extends Shape
{
    /**
     * @param array{SameSheetTargetVisualConfiguration?: SameSheetTargetVisualConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
