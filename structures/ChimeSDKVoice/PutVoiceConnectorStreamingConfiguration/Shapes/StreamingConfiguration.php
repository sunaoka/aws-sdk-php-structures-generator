<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorStreamingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $DataRetentionInHours
 * @property bool $Disabled
 * @property list<StreamingNotificationTarget>|null $StreamingNotificationTargets
 * @property MediaInsightsConfiguration|null $MediaInsightsConfiguration
 */
class StreamingConfiguration extends Shape
{
    /**
     * @param array{
     *     DataRetentionInHours: int<0, max>,
     *     Disabled: bool,
     *     StreamingNotificationTargets?: list<StreamingNotificationTarget>|null,
     *     MediaInsightsConfiguration?: MediaInsightsConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
