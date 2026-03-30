<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\EndChatForCase;

trait EndChatForCaseTrait
{
    /**
     * @param EndChatForCaseRequest $args
     * @return EndChatForCaseResponse
     */
    public function endChatForCase(EndChatForCaseRequest $args)
    {
        $result = parent::endChatForCase($args->toArray());
        return new EndChatForCaseResponse($result->toArray());
    }
}
