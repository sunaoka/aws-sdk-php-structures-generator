<?php

namespace Sunaoka\Aws\Structures\Chime\CreateChannelMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MemberArn
 * @property 'DEFAULT'|'HIDDEN' $Type
 * @property string|null $ChimeBearer
 */
class CreateChannelMembershipRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MemberArn: string,
     *     Type: 'DEFAULT'|'HIDDEN',
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
