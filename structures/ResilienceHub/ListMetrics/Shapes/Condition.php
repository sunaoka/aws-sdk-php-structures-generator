<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $field
 * @property 'Equals'|'NotEquals'|'GreaterThen'|'GreaterOrEquals'|'LessThen'|'LessOrEquals' $operator
 * @property string|null $value
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     field: string,
     *     operator: 'Equals'|'NotEquals'|'GreaterThen'|'GreaterOrEquals'|'LessThen'|'LessOrEquals',
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
