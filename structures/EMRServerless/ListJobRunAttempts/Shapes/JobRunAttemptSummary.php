<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRunAttempts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $id
 * @property string|null $name
 * @property 'BATCH'|'STREAMING'|null $mode
 * @property string $arn
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $jobCreatedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $executionRole
 * @property 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED' $state
 * @property string $stateDetails
 * @property string $releaseLabel
 * @property string|null $type
 * @property int<1, max>|null $attempt
 */
class JobRunAttemptSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     id: string,
     *     name?: string|null,
     *     mode?: 'BATCH'|'STREAMING'|null,
     *     arn: string,
     *     createdBy: string,
     *     jobCreatedAt: \Aws\Api\DateTimeResult,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     executionRole: string,
     *     state: 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED',
     *     stateDetails: string,
     *     releaseLabel: string,
     *     type?: string|null,
     *     attempt?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
