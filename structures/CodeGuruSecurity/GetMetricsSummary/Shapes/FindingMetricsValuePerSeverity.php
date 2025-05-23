<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $critical
 * @property double|null $high
 * @property double|null $info
 * @property double|null $low
 * @property double|null $medium
 */
class FindingMetricsValuePerSeverity extends Shape
{
    /**
     * @param array{
     *     critical?: double|null,
     *     high?: double|null,
     *     info?: double|null,
     *     low?: double|null,
     *     medium?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
