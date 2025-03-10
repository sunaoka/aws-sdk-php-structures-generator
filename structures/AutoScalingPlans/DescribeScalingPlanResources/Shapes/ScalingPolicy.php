<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlanResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property 'TargetTrackingScaling' $PolicyType
 * @property TargetTrackingConfiguration|null $TargetTrackingConfiguration
 */
class ScalingPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName: string,
     *     PolicyType: 'TargetTrackingScaling',
     *     TargetTrackingConfiguration?: TargetTrackingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
