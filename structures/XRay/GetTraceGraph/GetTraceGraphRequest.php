<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TraceIds
 * @property string|null $NextToken
 */
class GetTraceGraphRequest extends Request
{
    /**
     * @param array{
     *     TraceIds: list<string>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
