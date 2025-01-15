<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $offeringId
 * @property list<'EC2'|'Fargate'|'Lambda'|'SageMaker'>|null $productTypes
 * @property 'Compute'|'EC2Instance'|'SageMaker'|null $planType
 * @property string|null $description
 * @property 'All Upfront'|'Partial Upfront'|'No Upfront'|null $paymentOption
 * @property int<0, max>|null $durationSeconds
 * @property 'CNY'|'USD'|null $currency
 * @property string|null $serviceCode
 * @property string|null $usageType
 * @property string|null $operation
 * @property list<SavingsPlanOfferingProperty>|null $properties
 */
class SavingsPlanOffering extends Shape
{
    /**
     * @param array{
     *     offeringId?: string|null,
     *     productTypes?: list<'EC2'|'Fargate'|'Lambda'|'SageMaker'>|null,
     *     planType?: 'Compute'|'EC2Instance'|'SageMaker'|null,
     *     description?: string|null,
     *     paymentOption?: 'All Upfront'|'Partial Upfront'|'No Upfront'|null,
     *     durationSeconds?: int<0, max>|null,
     *     currency?: 'CNY'|'USD'|null,
     *     serviceCode?: string|null,
     *     usageType?: string|null,
     *     operation?: string|null,
     *     properties?: list<SavingsPlanOfferingProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
