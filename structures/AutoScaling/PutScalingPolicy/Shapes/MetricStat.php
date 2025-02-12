<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Metric $Metric
 * @property string $Stat
 * @property string|null $Unit
 */
class MetricStat extends Shape
{
    /**
     * @param array{
     *     Metric: Metric,
     *     Stat: string,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
