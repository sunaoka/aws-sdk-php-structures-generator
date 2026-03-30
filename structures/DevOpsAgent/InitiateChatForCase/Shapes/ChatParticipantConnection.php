<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\InitiateChatForCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $initialContactId
 * @property string $participantId
 * @property string $participantToken
 */
class ChatParticipantConnection extends Shape
{
    /**
     * @param array{
     *     initialContactId: string,
     *     participantId: string,
     *     participantToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
