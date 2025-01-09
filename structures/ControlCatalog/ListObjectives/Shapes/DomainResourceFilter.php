<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListObjectives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class DomainResourceFilter extends Shape
{
    /**
     * @param array{Arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
