<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDedicatedIps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ip
 * @property 'IN_PROGRESS'|'DONE'|'NOT_APPLICABLE' $WarmupStatus
 * @property int $WarmupPercentage
 * @property string|null $PoolName
 */
class DedicatedIp extends Shape
{
    /**
     * @param array{
     *     Ip: string,
     *     WarmupStatus: 'IN_PROGRESS'|'DONE'|'NOT_APPLICABLE',
     *     WarmupPercentage: int,
     *     PoolName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
