<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConformancePacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $OrganizationConformancePackNames
 * @property int<0, 100>|null $Limit
 * @property string|null $NextToken
 */
class DescribeOrganizationConformancePacksRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConformancePackNames?: list<string>|null,
     *     Limit?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
