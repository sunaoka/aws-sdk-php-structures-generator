<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ipAddress
 * @property string|null $userAgent
 */
class ThreatActorIp extends Shape
{
    /**
     * @param array{
     *     ipAddress: string,
     *     userAgent?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
