<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class IncludedProperty extends Shape
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
