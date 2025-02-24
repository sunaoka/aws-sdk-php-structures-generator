<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetPoliciesStats\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $RetentionPolicyCount
 */
class LifecyclePolicyStats extends Shape
{
    /**
     * @param array{RetentionPolicyCount?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
