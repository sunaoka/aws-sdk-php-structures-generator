<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $logGroupNamePattern
 * @property 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null $logGroupClass
 * @property bool|null $includeLinkedAccounts
 * @property list<string>|null $accountIdentifiers
 * @property string|null $nextToken
 * @property int<1, 1000>|null $limit
 */
class ListLogGroupsRequest extends Request
{
    /**
     * @param array{
     *     logGroupNamePattern?: string|null,
     *     logGroupClass?: 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null,
     *     includeLinkedAccounts?: bool|null,
     *     accountIdentifiers?: list<string>|null,
     *     nextToken?: string|null,
     *     limit?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
