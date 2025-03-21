<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 * @property 'Wav'|'Opus' $RecordingFileFormat
 */
class S3RecordingSinkRuntimeConfiguration extends Shape
{
    /**
     * @param array{
     *     Destination: string,
     *     RecordingFileFormat: 'Wav'|'Opus'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
