<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000000> $workerCount
 * @property WorkerResourceConfig|null $workerConfiguration
 */
class InitialCapacityConfig extends Shape
{
    /**
     * @param array{
     *     workerCount: int<1, 1000000>,
     *     workerConfiguration?: WorkerResourceConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
