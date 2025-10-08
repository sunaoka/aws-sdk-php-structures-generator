<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ImportFirewallDomains;

trait ImportFirewallDomainsTrait
{
    /**
     * @param ImportFirewallDomainsRequest $args
     * @return ImportFirewallDomainsResponse
     */
    public function importFirewallDomains(ImportFirewallDomainsRequest $args)
    {
        $result = parent::importFirewallDomains($args->toArray());
        return new ImportFirewallDomainsResponse($result->toArray());
    }
}
