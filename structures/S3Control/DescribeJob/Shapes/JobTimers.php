<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $ElapsedTimeInActiveSeconds
 */
class JobTimers extends Shape
{
    /**
     * @param array{ElapsedTimeInActiveSeconds?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
