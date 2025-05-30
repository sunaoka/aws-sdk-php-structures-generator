<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Expression
 * @property int<0, 31622400>|null $DurationInSeconds
 * @property RetryConfigOutput|null $RetryConfig
 */
class CanaryScheduleOutput extends Shape
{
    /**
     * @param array{
     *     Expression?: string|null,
     *     DurationInSeconds?: int<0, 31622400>|null,
     *     RetryConfig?: RetryConfigOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
