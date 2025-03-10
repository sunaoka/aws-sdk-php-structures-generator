<?php

namespace Sunaoka\Aws\Structures\Chime\CreateChannelModerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $ChannelModeratorArn
 * @property string|null $ChimeBearer
 */
class CreateChannelModeratorRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChannelModeratorArn: string,
     *     ChimeBearer?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
