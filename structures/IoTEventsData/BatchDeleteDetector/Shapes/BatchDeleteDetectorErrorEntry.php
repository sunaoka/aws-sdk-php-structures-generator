<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchDeleteDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $messageId
 * @property 'ResourceNotFoundException'|'InvalidRequestException'|'InternalFailureException'|'ServiceUnavailableException'|'ThrottlingException'|null $errorCode
 * @property string|null $errorMessage
 */
class BatchDeleteDetectorErrorEntry extends Shape
{
    /**
     * @param array{
     *     messageId?: string|null,
     *     errorCode?: 'ResourceNotFoundException'|'InvalidRequestException'|'InternalFailureException'|'ServiceUnavailableException'|'ThrottlingException'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
