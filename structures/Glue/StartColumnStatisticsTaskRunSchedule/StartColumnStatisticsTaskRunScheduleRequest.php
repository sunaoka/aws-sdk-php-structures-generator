<?php

namespace Sunaoka\Aws\Structures\Glue\StartColumnStatisticsTaskRunSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 */
class StartColumnStatisticsTaskRunScheduleRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
