<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bestRecipeArn
 */
class AutoMLResult extends Shape
{
    /**
     * @param array{bestRecipeArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
