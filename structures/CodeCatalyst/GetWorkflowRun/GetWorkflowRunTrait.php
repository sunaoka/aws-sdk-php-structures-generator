<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetWorkflowRun;

trait GetWorkflowRunTrait
{
    /**
     * @param GetWorkflowRunRequest $args
     * @return GetWorkflowRunResponse
     */
    public function getWorkflowRun(GetWorkflowRunRequest $args)
    {
        $result = parent::getWorkflowRun($args->toArray());
        return new GetWorkflowRunResponse($result->toArray());
    }
}
