<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $displayName
 * @property 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED' $status
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $defaultBudgetAction
 * @property 'NO_BUDGET_CONFIGURED'|'BUDGET_THRESHOLD_REACHED'|null $blockedReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class QueueSummary extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     displayName: string,
     *     status: 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED',
     *     defaultBudgetAction: 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS',
     *     blockedReason?: 'NO_BUDGET_CONFIGURED'|'BUDGET_THRESHOLD_REACHED'|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
