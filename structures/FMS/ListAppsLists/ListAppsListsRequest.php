<?php

namespace Sunaoka\Aws\Structures\FMS\ListAppsLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DefaultLists
 * @property string|null $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListAppsListsRequest extends Request
{
    /**
     * @param array{
     *     DefaultLists?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
