<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIFFERENCE'|'PERCENT_DIFFERENCE'|'PERCENT'|null $ComparisonMethod
 * @property ComparisonFormatConfiguration|null $ComparisonFormat
 */
class ComparisonConfiguration extends Shape
{
    /**
     * @param array{
     *     ComparisonMethod?: 'DIFFERENCE'|'PERCENT_DIFFERENCE'|'PERCENT'|null,
     *     ComparisonFormat?: ComparisonFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
