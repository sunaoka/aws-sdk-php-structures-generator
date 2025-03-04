<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'AudioWithCompositedVideo'|'AudioWithActiveSpeakerVideo' $MuxType
 * @property CompositedVideoArtifactsConfiguration|null $CompositedVideo
 * @property SourceConfiguration|null $SourceConfiguration
 */
class ChimeSdkMeetingLiveConnectorConfiguration extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     MuxType: 'AudioWithCompositedVideo'|'AudioWithActiveSpeakerVideo',
     *     CompositedVideo?: CompositedVideoArtifactsConfiguration|null,
     *     SourceConfiguration?: SourceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
