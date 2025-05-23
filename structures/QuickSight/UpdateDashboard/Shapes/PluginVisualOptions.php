<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PluginVisualProperty>|null $VisualProperties
 */
class PluginVisualOptions extends Shape
{
    /**
     * @param array{VisualProperties?: list<PluginVisualProperty>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
