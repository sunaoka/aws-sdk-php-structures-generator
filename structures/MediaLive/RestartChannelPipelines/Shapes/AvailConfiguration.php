<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AvailSettings|null $AvailSettings
 * @property 'ALL_OUTPUT_GROUPS'|'SCTE35_ENABLED_OUTPUT_GROUPS'|null $Scte35SegmentationScope
 */
class AvailConfiguration extends Shape
{
    /**
     * @param array{
     *     AvailSettings?: AvailSettings|null,
     *     Scte35SegmentationScope?: 'ALL_OUTPUT_GROUPS'|'SCTE35_ENABLED_OUTPUT_GROUPS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
