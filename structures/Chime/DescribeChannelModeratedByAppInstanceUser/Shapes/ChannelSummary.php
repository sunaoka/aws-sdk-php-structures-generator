<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeChannelModeratedByAppInstanceUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $ChannelArn
 * @property 'UNRESTRICTED'|'RESTRICTED'|null $Mode
 * @property 'PUBLIC'|'PRIVATE'|null $Privacy
 * @property string|null $Metadata
 * @property \Aws\Api\DateTimeResult|null $LastMessageTimestamp
 */
class ChannelSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ChannelArn?: string|null,
     *     Mode?: 'UNRESTRICTED'|'RESTRICTED'|null,
     *     Privacy?: 'PUBLIC'|'PRIVATE'|null,
     *     Metadata?: string|null,
     *     LastMessageTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
