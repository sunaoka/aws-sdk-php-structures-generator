<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeBandwidthRateLimitSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 23> $StartHourOfDay
 * @property int<0, 59> $StartMinuteOfHour
 * @property int<0, 23> $EndHourOfDay
 * @property int<0, 59> $EndMinuteOfHour
 * @property list<int<0, 6>> $DaysOfWeek
 * @property int<51200, max>|null $AverageUploadRateLimitInBitsPerSec
 * @property int<102400, max>|null $AverageDownloadRateLimitInBitsPerSec
 */
class BandwidthRateLimitInterval extends Shape
{
    /**
     * @param array{
     *     StartHourOfDay: int<0, 23>,
     *     StartMinuteOfHour: int<0, 59>,
     *     EndHourOfDay: int<0, 23>,
     *     EndMinuteOfHour: int<0, 59>,
     *     DaysOfWeek: list<int<0, 6>>,
     *     AverageUploadRateLimitInBitsPerSec?: int<51200, max>|null,
     *     AverageDownloadRateLimitInBitsPerSec?: int<102400, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
