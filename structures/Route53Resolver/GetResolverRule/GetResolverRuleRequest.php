<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverRuleId
 */
class GetResolverRuleRequest extends Request
{
    /**
     * @param array{ResolverRuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
