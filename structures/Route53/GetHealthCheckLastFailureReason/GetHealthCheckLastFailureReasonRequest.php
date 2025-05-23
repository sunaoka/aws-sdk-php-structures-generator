<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckLastFailureReason;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HealthCheckId
 */
class GetHealthCheckLastFailureReasonRequest extends Request
{
    /**
     * @param array{HealthCheckId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
