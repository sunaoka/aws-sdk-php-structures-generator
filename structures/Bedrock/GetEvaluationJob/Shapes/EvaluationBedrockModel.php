<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelIdentifier
 * @property string|null $inferenceParams
 * @property PerformanceConfiguration|null $performanceConfig
 */
class EvaluationBedrockModel extends Shape
{
    /**
     * @param array{
     *     modelIdentifier: string,
     *     inferenceParams?: string|null,
     *     performanceConfig?: PerformanceConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
