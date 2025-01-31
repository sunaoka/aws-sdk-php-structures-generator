<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchPutMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 9223372036854775807>|null $timeInMillis
 */
class TimestampValue extends Shape
{
    /**
     * @param array{timeInMillis?: int<1, 9223372036854775807>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
