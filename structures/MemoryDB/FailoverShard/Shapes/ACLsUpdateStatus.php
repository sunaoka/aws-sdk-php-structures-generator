<?php

namespace Sunaoka\Aws\Structures\MemoryDB\FailoverShard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ACLToApply
 */
class ACLsUpdateStatus extends Shape
{
    /**
     * @param array{ACLToApply?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
