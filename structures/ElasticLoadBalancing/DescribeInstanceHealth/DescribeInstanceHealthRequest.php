<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeInstanceHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property list<Shapes\Instance>|null $Instances
 */
class DescribeInstanceHealthRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     Instances?: list<Shapes\Instance>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
