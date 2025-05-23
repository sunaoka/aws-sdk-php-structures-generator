<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorArn
 */
class GetAccuracyMetricsRequest extends Request
{
    /**
     * @param array{PredictorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
