<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetApproximateUsageRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DAILY'|'MONTHLY'|'HOURLY' $Granularity
 * @property list<string>|null $Services
 * @property 'SERVICE'|'RESOURCE' $ApproximationDimension
 */
class GetApproximateUsageRecordsRequest extends Request
{
    /**
     * @param array{
     *     Granularity: 'DAILY'|'MONTHLY'|'HOURLY',
     *     Services?: list<string>|null,
     *     ApproximationDimension: 'SERVICE'|'RESOURCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
