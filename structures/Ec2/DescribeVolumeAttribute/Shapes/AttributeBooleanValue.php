<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Value
 */
class AttributeBooleanValue extends Shape
{
    /**
     * @param array{Value?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
