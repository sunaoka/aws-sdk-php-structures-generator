<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED' $StackDriftStatus
 * @property \Aws\Api\DateTimeResult|null $LastCheckTimestamp
 */
class StackDriftInformation extends Shape
{
    /**
     * @param array{
     *     StackDriftStatus: 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED',
     *     LastCheckTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
