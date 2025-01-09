<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeWarmPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $InstanceType
 * @property string $AvailabilityZone
 * @property 'Pending'|'Pending:Wait'|'Pending:Proceed'|'Quarantined'|'InService'|'Terminating'|'Terminating:Wait'|'Terminating:Proceed'|'Terminated'|'Detaching'|'Detached'|'EnteringStandby'|'Standby'|'Warmed:Pending'|'Warmed:Pending:Wait'|'Warmed:Pending:Proceed'|'Warmed:Terminating'|'Warmed:Terminating:Wait'|'Warmed:Terminating:Proceed'|'Warmed:Terminated'|'Warmed:Stopped'|'Warmed:Running'|'Warmed:Hibernated' $LifecycleState
 * @property string $HealthStatus
 * @property string $LaunchConfigurationName
 * @property LaunchTemplateSpecification $LaunchTemplate
 * @property bool $ProtectedFromScaleIn
 * @property string $WeightedCapacity
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     InstanceType?: string,
     *     AvailabilityZone: string,
     *     LifecycleState: 'Pending'|'Pending:Wait'|'Pending:Proceed'|'Quarantined'|'InService'|'Terminating'|'Terminating:Wait'|'Terminating:Proceed'|'Terminated'|'Detaching'|'Detached'|'EnteringStandby'|'Standby'|'Warmed:Pending'|'Warmed:Pending:Wait'|'Warmed:Pending:Proceed'|'Warmed:Terminating'|'Warmed:Terminating:Wait'|'Warmed:Terminating:Proceed'|'Warmed:Terminated'|'Warmed:Stopped'|'Warmed:Running'|'Warmed:Hibernated',
     *     HealthStatus: string,
     *     LaunchConfigurationName?: string,
     *     LaunchTemplate?: LaunchTemplateSpecification,
     *     ProtectedFromScaleIn: bool,
     *     WeightedCapacity?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
