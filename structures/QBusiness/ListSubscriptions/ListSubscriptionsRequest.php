<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
