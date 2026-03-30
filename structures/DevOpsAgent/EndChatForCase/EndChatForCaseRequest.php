<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\EndChatForCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $taskId
 * @property string|null $reason
 * @property string|null $requester
 * @property string|null $clientToken
 */
class EndChatForCaseRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     taskId: string,
     *     reason?: string|null,
     *     requester?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
