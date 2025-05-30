<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool|null $IncludeGraph
 */
class GetWorkflowRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IncludeGraph?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
