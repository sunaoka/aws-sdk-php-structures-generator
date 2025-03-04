<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TargetGroup>|null $TargetGroups
 */
class TargetGroupsConfig extends Shape
{
    /**
     * @param array{TargetGroups?: list<TargetGroup>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
