<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeliveryStream
 * @property bool $Enabled
 */
class Firehose extends Shape
{
    /**
     * @param array{
     *     DeliveryStream?: string|null,
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
