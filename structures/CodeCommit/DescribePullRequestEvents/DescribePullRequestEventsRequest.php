<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property 'PULL_REQUEST_CREATED'|'PULL_REQUEST_STATUS_CHANGED'|'PULL_REQUEST_SOURCE_REFERENCE_UPDATED'|'PULL_REQUEST_MERGE_STATE_CHANGED'|'PULL_REQUEST_APPROVAL_RULE_CREATED'|'PULL_REQUEST_APPROVAL_RULE_UPDATED'|'PULL_REQUEST_APPROVAL_RULE_DELETED'|'PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN'|'PULL_REQUEST_APPROVAL_STATE_CHANGED'|null $pullRequestEventType
 * @property string|null $actorArn
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class DescribePullRequestEventsRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     pullRequestEventType?: 'PULL_REQUEST_CREATED'|'PULL_REQUEST_STATUS_CHANGED'|'PULL_REQUEST_SOURCE_REFERENCE_UPDATED'|'PULL_REQUEST_MERGE_STATE_CHANGED'|'PULL_REQUEST_APPROVAL_RULE_CREATED'|'PULL_REQUEST_APPROVAL_RULE_UPDATED'|'PULL_REQUEST_APPROVAL_RULE_DELETED'|'PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN'|'PULL_REQUEST_APPROVAL_STATE_CHANGED'|null,
     *     actorArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
