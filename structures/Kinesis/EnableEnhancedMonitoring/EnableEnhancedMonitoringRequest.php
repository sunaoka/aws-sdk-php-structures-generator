<?php

namespace Sunaoka\Aws\Structures\Kinesis\EnableEnhancedMonitoring;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property list<'IncomingBytes'|'IncomingRecords'|'OutgoingBytes'|'OutgoingRecords'|'WriteProvisionedThroughputExceeded'|'ReadProvisionedThroughputExceeded'|'IteratorAgeMilliseconds'|'ALL'> $ShardLevelMetrics
 * @property string|null $StreamARN
 */
class EnableEnhancedMonitoringRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     ShardLevelMetrics: list<'IncomingBytes'|'IncomingRecords'|'OutgoingBytes'|'OutgoingRecords'|'WriteProvisionedThroughputExceeded'|'ReadProvisionedThroughputExceeded'|'IteratorAgeMilliseconds'|'ALL'>,
     *     StreamARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
