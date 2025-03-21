<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int<1, 100>|null $maxResults
 * @property string|null $namespaceArn
 * @property string|null $namespaceName
 * @property string|null $nextToken
 * @property string|null $ownerAccount
 * @property \Aws\Api\DateTimeResult|null $startTime
 */
class ListSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 100>|null,
     *     namespaceArn?: string|null,
     *     namespaceName?: string|null,
     *     nextToken?: string|null,
     *     ownerAccount?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
