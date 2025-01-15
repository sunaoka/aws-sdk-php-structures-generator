<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TokenUsage $usage
 * @property ConverseStreamMetrics $metrics
 * @property ConverseStreamTrace|null $trace
 * @property PerformanceConfiguration|null $performanceConfig
 */
class ConverseStreamMetadataEvent extends Shape
{
    /**
     * @param array{
     *     usage: TokenUsage,
     *     metrics: ConverseStreamMetrics,
     *     trace?: ConverseStreamTrace|null,
     *     performanceConfig?: PerformanceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
