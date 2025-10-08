<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $planArn
 * @property string $executionId
 * @property string|null $version
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $comment
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'graceful'|'ungraceful' $mode
 * @property 'inProgress'|'pausedByFailedStep'|'pausedByOperator'|'completed'|'completedWithExceptions'|'canceled'|'planExecutionTimedOut'|'pendingManualApproval'|'failed'|'pending'|'completedMonitoringApplicationHealth' $executionState
 * @property 'activate'|'deactivate' $executionAction
 * @property string $executionRegion
 * @property list<Shapes\StepState>|null $stepStates
 * @property Shapes\Plan|null $plan
 * @property string|null $actualRecoveryTime
 * @property string|null $nextToken
 */
class GetPlanExecutionResponse extends Response
{
}
