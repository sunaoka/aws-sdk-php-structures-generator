<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, array<'frontfill'|'middlefill'|'backfill'|'futurefill'|'frontfill_value'|'middlefill_value'|'backfill_value'|'futurefill_value', string>>|null $Filling
 * @property array<string, 'sum'|'avg'|'first'|'min'|'max'>|null $Aggregation
 */
class TimeSeriesTransformations extends Shape
{
    /**
     * @param array{
     *     Filling?: array<string, array<'frontfill'|'middlefill'|'backfill'|'futurefill'|'frontfill_value'|'middlefill_value'|'backfill_value'|'futurefill_value', string>>|null,
     *     Aggregation?: array<string, 'sum'|'avg'|'first'|'min'|'max'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
