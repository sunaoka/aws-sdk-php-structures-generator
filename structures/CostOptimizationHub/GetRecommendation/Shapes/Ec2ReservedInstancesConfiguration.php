<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountScope
 * @property string|null $service
 * @property string|null $term
 * @property string|null $paymentOption
 * @property string|null $reservedInstancesRegion
 * @property string|null $upfrontCost
 * @property string|null $monthlyRecurringCost
 * @property string|null $normalizedUnitsToPurchase
 * @property string|null $numberOfInstancesToPurchase
 * @property string|null $offeringClass
 * @property string|null $instanceFamily
 * @property string|null $instanceType
 * @property string|null $currentGeneration
 * @property string|null $platform
 * @property string|null $tenancy
 * @property bool|null $sizeFlexEligible
 */
class Ec2ReservedInstancesConfiguration extends Shape
{
    /**
     * @param array{
     *     accountScope?: string|null,
     *     service?: string|null,
     *     term?: string|null,
     *     paymentOption?: string|null,
     *     reservedInstancesRegion?: string|null,
     *     upfrontCost?: string|null,
     *     monthlyRecurringCost?: string|null,
     *     normalizedUnitsToPurchase?: string|null,
     *     numberOfInstancesToPurchase?: string|null,
     *     offeringClass?: string|null,
     *     instanceFamily?: string|null,
     *     instanceType?: string|null,
     *     currentGeneration?: string|null,
     *     platform?: string|null,
     *     tenancy?: string|null,
     *     sizeFlexEligible?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
