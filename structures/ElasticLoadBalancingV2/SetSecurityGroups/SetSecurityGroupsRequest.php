<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property list<string> $SecurityGroups
 * @property 'on'|'off'|null $EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic
 */
class SetSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     SecurityGroups: list<string>,
     *     EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?: 'on'|'off'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
