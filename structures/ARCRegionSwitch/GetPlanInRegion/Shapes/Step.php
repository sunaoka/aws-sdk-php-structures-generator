<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property ExecutionBlockConfiguration $executionBlockConfiguration
 * @property 'CustomActionLambda'|'ManualApproval'|'AuroraGlobalDatabase'|'EC2AutoScaling'|'ARCRoutingControl'|'ARCRegionSwitchPlan'|'Parallel'|'ECSServiceScaling'|'EKSResourceScaling'|'Route53HealthCheck' $executionBlockType
 */
class Step extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     executionBlockConfiguration: ExecutionBlockConfiguration,
     *     executionBlockType: 'CustomActionLambda'|'ManualApproval'|'AuroraGlobalDatabase'|'EC2AutoScaling'|'ARCRoutingControl'|'ARCRegionSwitchPlan'|'Parallel'|'ECSServiceScaling'|'EKSResourceScaling'|'Route53HealthCheck'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
