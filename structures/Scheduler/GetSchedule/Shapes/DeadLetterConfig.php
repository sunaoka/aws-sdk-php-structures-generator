<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 */
class DeadLetterConfig extends Shape
{
    /**
     * @param array{Arn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
