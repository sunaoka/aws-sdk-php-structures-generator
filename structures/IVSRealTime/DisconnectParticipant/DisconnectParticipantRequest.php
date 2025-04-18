<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DisconnectParticipant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property string $participantId
 * @property string|null $reason
 */
class DisconnectParticipantRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     participantId: string,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
