<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string|null $Name
 * @property 'FORWARD'|'SYSTEM'|'RECURSIVE'|'DELEGATE' $RuleType
 * @property string|null $DomainName
 * @property list<Shapes\TargetAddress>|null $TargetIps
 * @property string|null $ResolverEndpointId
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $DelegationRecord
 */
class CreateResolverRuleRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     Name?: string|null,
     *     RuleType: 'FORWARD'|'SYSTEM'|'RECURSIVE'|'DELEGATE',
     *     DomainName?: string|null,
     *     TargetIps?: list<Shapes\TargetAddress>|null,
     *     ResolverEndpointId?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DelegationRecord?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
