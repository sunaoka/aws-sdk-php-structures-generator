<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteChannelMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MemberArn
 * @property string|null $ChimeBearer
 */
class DeleteChannelMembershipRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MemberArn: string,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
