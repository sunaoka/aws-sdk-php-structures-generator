<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\BatchCreateChannelMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identity|null $InvitedBy
 * @property 'DEFAULT'|'HIDDEN'|null $Type
 * @property list<Identity>|null $Members
 * @property string|null $ChannelArn
 * @property string|null $SubChannelId
 */
class BatchChannelMemberships extends Shape
{
    /**
     * @param array{
     *     InvitedBy?: Identity|null,
     *     Type?: 'DEFAULT'|'HIDDEN'|null,
     *     Members?: list<Identity>|null,
     *     ChannelArn?: string|null,
     *     SubChannelId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
