<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deliveryStreamName
 * @property string|null $separator
 * @property Payload|null $payload
 */
class FirehoseAction extends Shape
{
    /**
     * @param array{
     *     deliveryStreamName: string,
     *     separator?: string|null,
     *     payload?: Payload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
