<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 */
class ProtectedJobSingleMemberOutput extends Shape
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
