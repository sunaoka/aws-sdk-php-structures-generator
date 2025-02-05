<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListSegmentDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSegmentDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
