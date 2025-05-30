<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GREATER_THAN_OR_EQUAL'|'GREATER_THAN'|'LESS_THAN'|'LESS_THAN_OR_EQUAL' $ComparisonOperator
 * @property int|null $EvaluationPeriods
 * @property string $MetricName
 * @property string|null $Namespace
 * @property int $Period
 * @property 'SAMPLE_COUNT'|'AVERAGE'|'SUM'|'MINIMUM'|'MAXIMUM'|null $Statistic
 * @property double $Threshold
 * @property 'NONE'|'SECONDS'|'MICRO_SECONDS'|'MILLI_SECONDS'|'BYTES'|'KILO_BYTES'|'MEGA_BYTES'|'GIGA_BYTES'|'TERA_BYTES'|'BITS'|'KILO_BITS'|'MEGA_BITS'|'GIGA_BITS'|'TERA_BITS'|'PERCENT'|'COUNT'|'BYTES_PER_SECOND'|'KILO_BYTES_PER_SECOND'|'MEGA_BYTES_PER_SECOND'|'GIGA_BYTES_PER_SECOND'|'TERA_BYTES_PER_SECOND'|'BITS_PER_SECOND'|'KILO_BITS_PER_SECOND'|'MEGA_BITS_PER_SECOND'|'GIGA_BITS_PER_SECOND'|'TERA_BITS_PER_SECOND'|'COUNT_PER_SECOND'|null $Unit
 * @property list<MetricDimension>|null $Dimensions
 */
class CloudWatchAlarmDefinition extends Shape
{
    /**
     * @param array{
     *     ComparisonOperator: 'GREATER_THAN_OR_EQUAL'|'GREATER_THAN'|'LESS_THAN'|'LESS_THAN_OR_EQUAL',
     *     EvaluationPeriods?: int|null,
     *     MetricName: string,
     *     Namespace?: string|null,
     *     Period: int,
     *     Statistic?: 'SAMPLE_COUNT'|'AVERAGE'|'SUM'|'MINIMUM'|'MAXIMUM'|null,
     *     Threshold: double,
     *     Unit?: 'NONE'|'SECONDS'|'MICRO_SECONDS'|'MILLI_SECONDS'|'BYTES'|'KILO_BYTES'|'MEGA_BYTES'|'GIGA_BYTES'|'TERA_BYTES'|'BITS'|'KILO_BITS'|'MEGA_BITS'|'GIGA_BITS'|'TERA_BITS'|'PERCENT'|'COUNT'|'BYTES_PER_SECOND'|'KILO_BYTES_PER_SECOND'|'MEGA_BYTES_PER_SECOND'|'GIGA_BYTES_PER_SECOND'|'TERA_BYTES_PER_SECOND'|'BITS_PER_SECOND'|'KILO_BITS_PER_SECOND'|'MEGA_BITS_PER_SECOND'|'GIGA_BITS_PER_SECOND'|'TERA_BITS_PER_SECOND'|'COUNT_PER_SECOND'|null,
     *     Dimensions?: list<MetricDimension>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
