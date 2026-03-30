<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\InitiateChatForCase;

trait InitiateChatForCaseTrait
{
    /**
     * @param InitiateChatForCaseRequest $args
     * @return InitiateChatForCaseResponse
     */
    public function initiateChatForCase(InitiateChatForCaseRequest $args)
    {
        $result = parent::initiateChatForCase($args->toArray());
        return new InitiateChatForCaseResponse($result->toArray());
    }
}
