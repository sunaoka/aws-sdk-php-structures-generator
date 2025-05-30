<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationDatasetMetricConfig> $datasetMetricConfigs
 * @property EvaluatorModelConfig|null $evaluatorModelConfig
 * @property AutomatedEvaluationCustomMetricConfig|null $customMetricConfig
 */
class AutomatedEvaluationConfig extends Shape
{
    /**
     * @param array{
     *     datasetMetricConfigs: list<EvaluationDatasetMetricConfig>,
     *     evaluatorModelConfig?: EvaluatorModelConfig|null,
     *     customMetricConfig?: AutomatedEvaluationCustomMetricConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
