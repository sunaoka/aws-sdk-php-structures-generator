<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|'UNAVAILABLE'|null $AutomaticRenewal
 * @property int<1, max>|null $RenewalCount
 */
class RenewalSettings extends Shape
{
    /**
     * @param array{
     *     AutomaticRenewal?: 'DISABLED'|'ENABLED'|'UNAVAILABLE'|null,
     *     RenewalCount?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
