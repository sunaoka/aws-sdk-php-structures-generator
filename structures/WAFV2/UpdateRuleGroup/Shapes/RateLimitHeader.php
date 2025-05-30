<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<TextTransformation> $TextTransformations
 */
class RateLimitHeader extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     TextTransformations: list<TextTransformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
