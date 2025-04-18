<?php

namespace Sunaoka\Aws\Structures\Connect\ListAssociatedContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAssociatedContactsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
