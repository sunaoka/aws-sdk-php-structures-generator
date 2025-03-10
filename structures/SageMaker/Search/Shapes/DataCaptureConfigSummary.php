<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableCapture
 * @property 'Started'|'Stopped' $CaptureStatus
 * @property int<0, 100> $CurrentSamplingPercentage
 * @property string $DestinationS3Uri
 * @property string $KmsKeyId
 */
class DataCaptureConfigSummary extends Shape
{
    /**
     * @param array{
     *     EnableCapture: bool,
     *     CaptureStatus: 'Started'|'Stopped',
     *     CurrentSamplingPercentage: int<0, 100>,
     *     DestinationS3Uri: string,
     *     KmsKeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
