<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetGroupIdentifier
 * @property int<0, 999>|null $weight
 */
class WeightedTargetGroup extends Shape
{
    /**
     * @param array{
     *     targetGroupIdentifier: string,
     *     weight?: int<0, 999>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
