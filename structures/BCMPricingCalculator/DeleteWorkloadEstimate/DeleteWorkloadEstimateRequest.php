<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\DeleteWorkloadEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DeleteWorkloadEstimateRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
