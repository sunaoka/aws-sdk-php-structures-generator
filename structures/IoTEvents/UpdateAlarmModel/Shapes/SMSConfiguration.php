<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $senderId
 * @property string|null $additionalMessage
 * @property list<RecipientDetail> $recipients
 */
class SMSConfiguration extends Shape
{
    /**
     * @param array{
     *     senderId?: string|null,
     *     additionalMessage?: string|null,
     *     recipients: list<RecipientDetail>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
