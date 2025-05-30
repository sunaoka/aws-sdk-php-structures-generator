<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRegexPatternSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegexString
 */
class Regex extends Shape
{
    /**
     * @param array{RegexString?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
