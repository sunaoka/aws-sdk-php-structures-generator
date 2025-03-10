<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageId
 * @property string|null $Content
 * @property string|null $Metadata
 * @property 'STANDARD'|'CONTROL'|null $Type
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastEditedTimestamp
 * @property Identity|null $Sender
 * @property bool|null $Redacted
 */
class ChannelMessageSummary extends Shape
{
    /**
     * @param array{
     *     MessageId?: string|null,
     *     Content?: string|null,
     *     Metadata?: string|null,
     *     Type?: 'STANDARD'|'CONTROL'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastEditedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Sender?: Identity|null,
     *     Redacted?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
