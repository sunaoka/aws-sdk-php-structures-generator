<?php

namespace Sunaoka\Aws\Structures\AppSync\ListFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 */
class ListFunctionsRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
