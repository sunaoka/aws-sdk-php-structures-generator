<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SectionBasedLayoutPaperCanvasSizeOptions|null $PaperCanvasSizeOptions
 */
class SectionBasedLayoutCanvasSizeOptions extends Shape
{
    /**
     * @param array{PaperCanvasSizeOptions?: SectionBasedLayoutPaperCanvasSizeOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
