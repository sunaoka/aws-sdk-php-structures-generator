<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property string|null $location
 * @property string $usageAccountId
 * @property BillInterval $billInterval
 * @property Expression $filterExpression
 */
class HistoricalUsageEntity extends Shape
{
    /**
     * @param array{
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     location?: string|null,
     *     usageAccountId: string,
     *     billInterval: BillInterval,
     *     filterExpression: Expression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
