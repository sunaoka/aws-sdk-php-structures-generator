<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isResponsible
 */
class JobComputePaymentConfig extends Shape
{
    /**
     * @param array{isResponsible: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
