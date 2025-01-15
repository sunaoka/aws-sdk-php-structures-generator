<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListRuleGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'MANAGED'|'ACCOUNT'|null $Scope
 * @property 'AWS_MANAGED_THREAT_SIGNATURES'|'AWS_MANAGED_DOMAIN_LISTS'|null $ManagedType
 * @property 'STATELESS'|'STATEFUL'|null $Type
 */
class ListRuleGroupsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Scope?: 'MANAGED'|'ACCOUNT'|null,
     *     ManagedType?: 'AWS_MANAGED_THREAT_SIGNATURES'|'AWS_MANAGED_DOMAIN_LISTS'|null,
     *     Type?: 'STATELESS'|'STATEFUL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
