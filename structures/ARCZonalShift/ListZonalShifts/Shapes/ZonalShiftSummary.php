<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListZonalShifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awayFrom
 * @property string $comment
 * @property \Aws\Api\DateTimeResult $expiryTime
 * @property 'FAILED'|'INTERRUPTED'|'PENDING'|'SUCCEEDED'|null $practiceRunOutcome
 * @property string $resourceIdentifier
 * @property 'ZONAL_SHIFT'|'PRACTICE_RUN'|'FIS_EXPERIMENT'|'ZONAL_AUTOSHIFT'|null $shiftType
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED' $status
 * @property string $zonalShiftId
 */
class ZonalShiftSummary extends Shape
{
    /**
     * @param array{
     *     awayFrom: string,
     *     comment: string,
     *     expiryTime: \Aws\Api\DateTimeResult,
     *     practiceRunOutcome?: 'FAILED'|'INTERRUPTED'|'PENDING'|'SUCCEEDED'|null,
     *     resourceIdentifier: string,
     *     shiftType?: 'ZONAL_SHIFT'|'PRACTICE_RUN'|'FIS_EXPERIMENT'|'ZONAL_AUTOSHIFT'|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     status: 'ACTIVE'|'EXPIRED'|'CANCELED',
     *     zonalShiftId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
