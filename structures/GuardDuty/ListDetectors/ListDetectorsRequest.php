<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDetectorsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
