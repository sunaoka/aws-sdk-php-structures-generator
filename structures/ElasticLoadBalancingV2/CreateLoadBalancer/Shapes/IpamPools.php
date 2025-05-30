<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv4IpamPoolId
 */
class IpamPools extends Shape
{
    /**
     * @param array{Ipv4IpamPoolId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
