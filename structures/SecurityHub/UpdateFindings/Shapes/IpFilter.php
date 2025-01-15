<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 */
class IpFilter extends Shape
{
    /**
     * @param array{Cidr?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
