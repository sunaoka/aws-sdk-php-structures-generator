<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoCodecSettings|null $CodecSettings
 * @property int|null $Height
 * @property string $Name
 * @property 'NONE'|'PASSTHROUGH'|'RESPOND'|null $RespondToAfd
 * @property 'DEFAULT'|'STRETCH_TO_OUTPUT'|null $ScalingBehavior
 * @property int<0, 100>|null $Sharpness
 * @property int|null $Width
 */
class VideoDescription extends Shape
{
    /**
     * @param array{
     *     CodecSettings?: VideoCodecSettings|null,
     *     Height?: int|null,
     *     Name: string,
     *     RespondToAfd?: 'NONE'|'PASSTHROUGH'|'RESPOND'|null,
     *     ScalingBehavior?: 'DEFAULT'|'STRETCH_TO_OUTPUT'|null,
     *     Sharpness?: int<0, 100>|null,
     *     Width?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
