<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DescribeSupportLevel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $taskId
 */
class DescribeSupportLevelRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
