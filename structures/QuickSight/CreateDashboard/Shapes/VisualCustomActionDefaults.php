<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VisualHighlightOperation|null $highlightOperation
 */
class VisualCustomActionDefaults extends Shape
{
    /**
     * @param array{highlightOperation?: VisualHighlightOperation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
