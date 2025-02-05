<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VendorName
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string|null $VersionName
 */
class DescribeManagedRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     VendorName: string,
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     VersionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
