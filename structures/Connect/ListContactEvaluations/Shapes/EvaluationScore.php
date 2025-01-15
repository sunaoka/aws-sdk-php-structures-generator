<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Percentage
 * @property bool|null $NotApplicable
 * @property bool|null $AutomaticFail
 */
class EvaluationScore extends Shape
{
    /**
     * @param array{
     *     Percentage?: double|null,
     *     NotApplicable?: bool|null,
     *     AutomaticFail?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
