<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $featuredParticipantAttribute
 * @property bool|null $omitStoppedVideo
 * @property 'AUTO'|'VIDEO'|'SQUARE'|'PORTRAIT'|null $videoAspectRatio
 * @property 'FILL'|'COVER'|'CONTAIN'|null $videoFillMode
 * @property int<0, max>|null $gridGap
 */
class GridConfiguration extends Shape
{
    /**
     * @param array{
     *     featuredParticipantAttribute?: string|null,
     *     omitStoppedVideo?: bool|null,
     *     videoAspectRatio?: 'AUTO'|'VIDEO'|'SQUARE'|'PORTRAIT'|null,
     *     videoFillMode?: 'FILL'|'COVER'|'CONTAIN'|null,
     *     gridGap?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
