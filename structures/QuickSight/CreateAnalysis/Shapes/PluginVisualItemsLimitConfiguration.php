<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ItemsLimit
 */
class PluginVisualItemsLimitConfiguration extends Shape
{
    /**
     * @param array{ItemsLimit?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
