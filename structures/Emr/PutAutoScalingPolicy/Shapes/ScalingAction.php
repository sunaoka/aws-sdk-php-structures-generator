<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON_DEMAND'|'SPOT'|null $Market
 * @property SimpleScalingPolicyConfiguration $SimpleScalingPolicyConfiguration
 */
class ScalingAction extends Shape
{
    /**
     * @param array{
     *     Market?: 'ON_DEMAND'|'SPOT'|null,
     *     SimpleScalingPolicyConfiguration: SimpleScalingPolicyConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
