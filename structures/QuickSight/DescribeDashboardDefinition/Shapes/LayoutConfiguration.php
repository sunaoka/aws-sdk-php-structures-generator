<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GridLayoutConfiguration|null $GridLayout
 * @property FreeFormLayoutConfiguration|null $FreeFormLayout
 * @property SectionBasedLayoutConfiguration|null $SectionBasedLayout
 */
class LayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     GridLayout?: GridLayoutConfiguration|null,
     *     FreeFormLayout?: FreeFormLayoutConfiguration|null,
     *     SectionBasedLayout?: SectionBasedLayoutConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
