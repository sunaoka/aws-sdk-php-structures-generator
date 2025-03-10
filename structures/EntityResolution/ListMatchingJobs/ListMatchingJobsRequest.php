<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListMatchingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property string $workflowName
 */
class ListMatchingJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
