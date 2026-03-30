<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\InitiateChatForCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $taskId
 * @property string|null $clientToken
 */
class InitiateChatForCaseRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     taskId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
