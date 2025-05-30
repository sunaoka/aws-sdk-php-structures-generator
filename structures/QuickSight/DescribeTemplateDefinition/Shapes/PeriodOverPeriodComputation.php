<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string|null $Name
 * @property DimensionField|null $Time
 * @property MeasureField|null $Value
 */
class PeriodOverPeriodComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string|null,
     *     Time?: DimensionField|null,
     *     Value?: MeasureField|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
