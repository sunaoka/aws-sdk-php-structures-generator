<?php

namespace Sunaoka\Aws\Structures\Keyspaces\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
