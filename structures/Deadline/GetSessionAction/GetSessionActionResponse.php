<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionActionId
 * @property 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED' $status
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $workerUpdatedAt
 * @property float|null $progressPercent
 * @property string $sessionId
 * @property int<-2147483648, 2147483647>|null $processExitCode
 * @property string|null $progressMessage
 * @property Shapes\SessionActionDefinition $definition
 * @property list<Shapes\AcquiredLimit>|null $acquiredLimits
 * @property list<Shapes\TaskRunManifestPropertiesResponse>|null $manifests
 */
class GetSessionActionResponse extends Response
{
}
