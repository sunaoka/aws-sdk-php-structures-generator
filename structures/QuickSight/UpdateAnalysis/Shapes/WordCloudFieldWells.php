<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WordCloudAggregatedFieldWells|null $WordCloudAggregatedFieldWells
 */
class WordCloudFieldWells extends Shape
{
    /**
     * @param array{WordCloudAggregatedFieldWells?: WordCloudAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
