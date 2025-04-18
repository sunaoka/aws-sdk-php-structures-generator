<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $IncludeLinkedAccounts
 * @property string|null $AwsAccountId
 */
class ListServicesRequest extends Request
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     IncludeLinkedAccounts?: bool|null,
     *     AwsAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
