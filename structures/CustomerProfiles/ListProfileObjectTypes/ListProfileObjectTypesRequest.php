<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileObjectTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListProfileObjectTypesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
