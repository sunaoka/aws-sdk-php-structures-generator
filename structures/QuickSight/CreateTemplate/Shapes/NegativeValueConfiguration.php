<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POSITIVE'|'NEGATIVE' $DisplayMode
 */
class NegativeValueConfiguration extends Shape
{
    /**
     * @param array{DisplayMode: 'POSITIVE'|'NEGATIVE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
