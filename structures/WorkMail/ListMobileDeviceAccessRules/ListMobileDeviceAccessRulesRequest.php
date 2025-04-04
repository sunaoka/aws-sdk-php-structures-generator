<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMobileDeviceAccessRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 */
class ListMobileDeviceAccessRulesRequest extends Request
{
    /**
     * @param array{OrganizationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
