<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deploymentId
 * @property string|null $instanceId
 * @property 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property list<LifecycleEvent>|null $lifecycleEvents
 * @property 'Blue'|'Green'|null $instanceType
 */
class InstanceSummary extends Shape
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     instanceId?: string|null,
     *     status?: 'Pending'|'InProgress'|'Succeeded'|'Failed'|'Skipped'|'Unknown'|'Ready'|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     lifecycleEvents?: list<LifecycleEvent>|null,
     *     instanceType?: 'Blue'|'Green'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
