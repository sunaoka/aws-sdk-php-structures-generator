<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComponentId
 * @property \Aws\Api\DateTimeResult $LastCheckedTimestamp
 * @property 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED' $Readiness
 * @property string|null $ResourceArn
 */
class ResourceResult extends Shape
{
    /**
     * @param array{
     *     ComponentId?: string|null,
     *     LastCheckedTimestamp: \Aws\Api\DateTimeResult,
     *     Readiness: 'READY'|'NOT_READY'|'UNKNOWN'|'NOT_AUTHORIZED',
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
