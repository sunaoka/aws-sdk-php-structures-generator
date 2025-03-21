<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000>|null $targetResourceCount
 */
class FastLaunchSnapshotConfiguration extends Shape
{
    /**
     * @param array{targetResourceCount?: int<1, 10000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
