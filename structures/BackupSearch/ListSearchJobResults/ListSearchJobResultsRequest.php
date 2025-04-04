<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchJobIdentifier
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListSearchJobResultsRequest extends Request
{
    /**
     * @param array{
     *     SearchJobIdentifier: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
