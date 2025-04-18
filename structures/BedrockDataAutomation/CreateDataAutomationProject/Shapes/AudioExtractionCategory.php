<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $state
 * @property list<'AUDIO_CONTENT_MODERATION'|'TRANSCRIPT'|'TOPIC_CONTENT_MODERATION'>|null $types
 */
class AudioExtractionCategory extends Shape
{
    /**
     * @param array{
     *     state: 'ENABLED'|'DISABLED',
     *     types?: list<'AUDIO_CONTENT_MODERATION'|'TRANSCRIPT'|'TOPIC_CONTENT_MODERATION'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
