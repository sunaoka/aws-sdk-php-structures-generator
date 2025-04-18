<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetAgentMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $memoryId
 * @property \Aws\Api\DateTimeResult|null $sessionExpiryTime
 * @property string|null $sessionId
 * @property \Aws\Api\DateTimeResult|null $sessionStartTime
 * @property string|null $summaryText
 */
class MemorySessionSummary extends Shape
{
    /**
     * @param array{
     *     memoryId?: string|null,
     *     sessionExpiryTime?: \Aws\Api\DateTimeResult|null,
     *     sessionId?: string|null,
     *     sessionStartTime?: \Aws\Api\DateTimeResult|null,
     *     summaryText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
