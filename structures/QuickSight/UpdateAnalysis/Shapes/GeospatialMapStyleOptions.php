<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LIGHT_GRAY'|'DARK_GRAY'|'STREET'|'IMAGERY'|null $BaseMapStyle
 */
class GeospatialMapStyleOptions extends Shape
{
    /**
     * @param array{BaseMapStyle?: 'LIGHT_GRAY'|'DARK_GRAY'|'STREET'|'IMAGERY'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
