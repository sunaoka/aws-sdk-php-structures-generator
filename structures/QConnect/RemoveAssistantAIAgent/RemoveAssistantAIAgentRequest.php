<?php

namespace Sunaoka\Aws\Structures\QConnect\RemoveAssistantAIAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER' $aiAgentType
 */
class RemoveAssistantAIAgentRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     aiAgentType: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
