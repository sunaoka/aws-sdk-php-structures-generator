<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListWorkspaces;

trait ListWorkspacesTrait
{
    /**
     * @param ListWorkspacesRequest $args
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces(ListWorkspacesRequest $args)
    {
        $result = parent::listWorkspaces($args->toArray());
        return new ListWorkspacesResponse($result->toArray());
    }
}
