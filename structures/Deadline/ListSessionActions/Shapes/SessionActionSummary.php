<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionActionId
 * @property 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED' $status
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $workerUpdatedAt
 * @property float|null $progressPercent
 * @property SessionActionDefinitionSummary $definition
 * @property list<TaskRunManifestPropertiesResponse>|null $manifests
 */
class SessionActionSummary extends Shape
{
    /**
     * @param array{
     *     sessionActionId: string,
     *     status: 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED',
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     workerUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     progressPercent?: float|null,
     *     definition: SessionActionDefinitionSummary,
     *     manifests?: list<TaskRunManifestPropertiesResponse>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
