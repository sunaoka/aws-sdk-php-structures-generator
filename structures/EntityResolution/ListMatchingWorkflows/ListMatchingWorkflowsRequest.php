<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListMatchingWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<min, 25>|null $maxResults
 */
class ListMatchingWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<min, 25>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
