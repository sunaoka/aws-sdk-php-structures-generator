<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteApnsVoipSandboxChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class DeleteApnsVoipSandboxChannelRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
