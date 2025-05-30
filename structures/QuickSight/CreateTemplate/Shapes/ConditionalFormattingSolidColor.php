<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property string|null $Color
 */
class ConditionalFormattingSolidColor extends Shape
{
    /**
     * @param array{
     *     Expression: string,
     *     Color?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
