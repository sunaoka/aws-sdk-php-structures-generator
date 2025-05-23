<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WeightedTarget> $weightedTargets
 */
class GrpcRouteAction extends Shape
{
    /**
     * @param array{weightedTargets: list<WeightedTarget>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
