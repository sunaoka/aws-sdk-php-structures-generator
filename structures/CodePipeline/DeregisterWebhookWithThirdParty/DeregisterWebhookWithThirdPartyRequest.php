<?php

namespace Sunaoka\Aws\Structures\CodePipeline\DeregisterWebhookWithThirdParty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $webhookName
 */
class DeregisterWebhookWithThirdPartyRequest extends Request
{
    /**
     * @param array{webhookName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
