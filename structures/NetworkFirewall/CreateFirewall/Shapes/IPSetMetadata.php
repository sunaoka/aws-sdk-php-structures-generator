<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 1000000>|null $ResolvedCIDRCount
 */
class IPSetMetadata extends Shape
{
    /**
     * @param array{ResolvedCIDRCount?: int<0, 1000000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
