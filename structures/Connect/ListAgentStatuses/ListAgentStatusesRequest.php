<?php

namespace Sunaoka\Aws\Structures\Connect\ListAgentStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property list<'ROUTABLE'|'CUSTOM'|'OFFLINE'>|null $AgentStatusTypes
 */
class ListAgentStatusesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     AgentStatusTypes?: list<'ROUTABLE'|'CUSTOM'|'OFFLINE'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
