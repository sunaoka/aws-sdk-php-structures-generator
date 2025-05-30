<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelPlacementGroupId
 * @property string|null $ClusterId
 */
class AnywhereSettings extends Shape
{
    /**
     * @param array{
     *     ChannelPlacementGroupId?: string|null,
     *     ClusterId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
