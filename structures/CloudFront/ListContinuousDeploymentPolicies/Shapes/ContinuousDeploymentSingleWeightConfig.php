<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListContinuousDeploymentPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Weight
 * @property SessionStickinessConfig|null $SessionStickinessConfig
 */
class ContinuousDeploymentSingleWeightConfig extends Shape
{
    /**
     * @param array{
     *     Weight: float,
     *     SessionStickinessConfig?: SessionStickinessConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
