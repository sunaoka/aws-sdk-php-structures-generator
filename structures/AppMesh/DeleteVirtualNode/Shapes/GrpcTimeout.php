<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Duration|null $idle
 * @property Duration|null $perRequest
 */
class GrpcTimeout extends Shape
{
    /**
     * @param array{
     *     idle?: Duration|null,
     *     perRequest?: Duration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
