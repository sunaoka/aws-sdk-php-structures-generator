<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queueUrl
 * @property bool|null $useBase64
 * @property Payload|null $payload
 */
class SqsAction extends Shape
{
    /**
     * @param array{
     *     queueUrl: string,
     *     useBase64?: bool|null,
     *     payload?: Payload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
