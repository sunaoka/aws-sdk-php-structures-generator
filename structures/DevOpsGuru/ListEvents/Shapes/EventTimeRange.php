<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $FromTime
 * @property \Aws\Api\DateTimeResult $ToTime
 */
class EventTimeRange extends Shape
{
    /**
     * @param array{
     *     FromTime: \Aws\Api\DateTimeResult,
     *     ToTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
