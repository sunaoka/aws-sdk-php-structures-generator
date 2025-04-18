<?php

namespace Sunaoka\Aws\Structures\Athena\CreateCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<24, max> $TargetDpus
 * @property string $Name
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     TargetDpus: int<24, max>,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
