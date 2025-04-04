<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FailoverConditionSettings|null $FailoverConditionSettings
 */
class FailoverCondition extends Shape
{
    /**
     * @param array{FailoverConditionSettings?: FailoverConditionSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
