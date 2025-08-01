<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LIFETIME'|'DAYS_30'|'DAYS_180'|'DAYS_14'|'DAYS_60'|'DAYS_90'|null $rescanDuration
 * @property 'SUCCESS'|'PENDING'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'DAYS_14'|'DAYS_30'|'DAYS_60'|'DAYS_90'|'DAYS_180'|null $pullDateRescanDuration
 * @property 'LAST_PULL_DATE'|'LAST_IN_USE_AT'|null $pullDateRescanMode
 */
class EcrRescanDurationState extends Shape
{
    /**
     * @param array{
     *     rescanDuration?: 'LIFETIME'|'DAYS_30'|'DAYS_180'|'DAYS_14'|'DAYS_60'|'DAYS_90'|null,
     *     status?: 'SUCCESS'|'PENDING'|'FAILED'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     pullDateRescanDuration?: 'DAYS_14'|'DAYS_30'|'DAYS_60'|'DAYS_90'|'DAYS_180'|null,
     *     pullDateRescanMode?: 'LAST_PULL_DATE'|'LAST_IN_USE_AT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
