<?php

namespace Sunaoka\Aws\Structures\Chime\PutSipMediaApplicationLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableSipMediaApplicationMessageLogs
 */
class SipMediaApplicationLoggingConfiguration extends Shape
{
    /**
     * @param array{EnableSipMediaApplicationMessageLogs?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
