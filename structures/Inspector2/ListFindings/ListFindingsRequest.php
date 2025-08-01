<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\FilterCriteria|null $filterCriteria
 * @property Shapes\SortCriteria|null $sortCriteria
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filterCriteria?: Shapes\FilterCriteria|null,
     *     sortCriteria?: Shapes\SortCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
