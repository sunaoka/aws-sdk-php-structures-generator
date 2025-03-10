<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListImportFailures;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImportId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListImportFailuresRequest extends Request
{
    /**
     * @param array{
     *     ImportId: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
