<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaSourceConfig $MediaSourceConfig
 * @property ScheduleConfig|null $ScheduleConfig
 */
class RecorderConfig extends Shape
{
    /**
     * @param array{
     *     MediaSourceConfig: MediaSourceConfig,
     *     ScheduleConfig?: ScheduleConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
