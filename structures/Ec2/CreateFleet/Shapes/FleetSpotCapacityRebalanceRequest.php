<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'launch'|'launch-before-terminate'|null $ReplacementStrategy
 * @property int|null $TerminationDelay
 */
class FleetSpotCapacityRebalanceRequest extends Shape
{
    /**
     * @param array{
     *     ReplacementStrategy?: 'launch'|'launch-before-terminate'|null,
     *     TerminationDelay?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
