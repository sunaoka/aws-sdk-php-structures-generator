<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelCards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NameContains
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived'|null $ModelCardStatus
 * @property string|null $NextToken
 * @property 'Name'|'CreationTime'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListModelCardsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 100>|null,
     *     NameContains?: string|null,
     *     ModelCardStatus?: 'Draft'|'PendingReview'|'Approved'|'Archived'|null,
     *     NextToken?: string|null,
     *     SortBy?: 'Name'|'CreationTime'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
