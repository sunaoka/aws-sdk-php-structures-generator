<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRunAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $assessmentRunArn
 * @property 'HEALTHY'|'UNHEALTHY'|'UNKNOWN' $agentHealth
 * @property 'IDLE'|'RUNNING'|'SHUTDOWN'|'UNHEALTHY'|'THROTTLED'|'UNKNOWN' $agentHealthCode
 * @property string|null $agentHealthDetails
 * @property string|null $autoScalingGroup
 * @property list<TelemetryMetadata> $telemetryMetadata
 */
class AssessmentRunAgent extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     assessmentRunArn: string,
     *     agentHealth: 'HEALTHY'|'UNHEALTHY'|'UNKNOWN',
     *     agentHealthCode: 'IDLE'|'RUNNING'|'SHUTDOWN'|'UNHEALTHY'|'THROTTLED'|'UNKNOWN',
     *     agentHealthDetails?: string|null,
     *     autoScalingGroup?: string|null,
     *     telemetryMetadata: list<TelemetryMetadata>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
