<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GridLayoutCanvasSizeOptions $CanvasSizeOptions
 */
class DefaultGridLayoutConfiguration extends Shape
{
    /**
     * @param array{CanvasSizeOptions: GridLayoutCanvasSizeOptions} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
