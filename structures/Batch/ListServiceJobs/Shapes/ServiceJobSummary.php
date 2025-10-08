<?php

namespace Sunaoka\Aws\Structures\Batch\ListServiceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LatestServiceJobAttempt|null $latestAttempt
 * @property int|null $createdAt
 * @property string|null $jobArn
 * @property string $jobId
 * @property string $jobName
 * @property 'SAGEMAKER_TRAINING' $serviceJobType
 * @property string|null $shareIdentifier
 * @property 'SUBMITTED'|'PENDING'|'RUNNABLE'|'SCHEDULED'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|null $status
 * @property string|null $statusReason
 * @property int|null $startedAt
 * @property int|null $stoppedAt
 */
class ServiceJobSummary extends Shape
{
    /**
     * @param array{
     *     latestAttempt?: LatestServiceJobAttempt|null,
     *     createdAt?: int|null,
     *     jobArn?: string|null,
     *     jobId: string,
     *     jobName: string,
     *     serviceJobType: 'SAGEMAKER_TRAINING',
     *     shareIdentifier?: string|null,
     *     status?: 'SUBMITTED'|'PENDING'|'RUNNABLE'|'SCHEDULED'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|null,
     *     statusReason?: string|null,
     *     startedAt?: int|null,
     *     stoppedAt?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
