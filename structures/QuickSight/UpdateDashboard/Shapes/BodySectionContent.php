<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SectionLayoutConfiguration|null $Layout
 */
class BodySectionContent extends Shape
{
    /**
     * @param array{Layout?: SectionLayoutConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
