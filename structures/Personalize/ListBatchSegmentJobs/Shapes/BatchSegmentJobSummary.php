<?php

namespace Sunaoka\Aws\Structures\Personalize\ListBatchSegmentJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $batchSegmentJobArn
 * @property string|null $jobName
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 * @property string|null $solutionVersionArn
 */
class BatchSegmentJobSummary extends Shape
{
    /**
     * @param array{
     *     batchSegmentJobArn?: string|null,
     *     jobName?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     failureReason?: string|null,
     *     solutionVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
