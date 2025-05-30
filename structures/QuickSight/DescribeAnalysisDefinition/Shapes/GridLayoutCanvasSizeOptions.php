<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GridLayoutScreenCanvasSizeOptions|null $ScreenCanvasSizeOptions
 */
class GridLayoutCanvasSizeOptions extends Shape
{
    /**
     * @param array{ScreenCanvasSizeOptions?: GridLayoutScreenCanvasSizeOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
