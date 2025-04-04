<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleId
 */
class ExcludedRule extends Shape
{
    /**
     * @param array{RuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
