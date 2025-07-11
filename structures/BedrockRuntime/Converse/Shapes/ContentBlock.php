<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property ImageBlock|null $image
 * @property DocumentBlock|null $document
 * @property VideoBlock|null $video
 * @property ToolUseBlock|null $toolUse
 * @property ToolResultBlock|null $toolResult
 * @property GuardrailConverseContentBlock|null $guardContent
 * @property CachePointBlock|null $cachePoint
 * @property ReasoningContentBlock|null $reasoningContent
 * @property CitationsContentBlock|null $citationsContent
 */
class ContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     image?: ImageBlock|null,
     *     document?: DocumentBlock|null,
     *     video?: VideoBlock|null,
     *     toolUse?: ToolUseBlock|null,
     *     toolResult?: ToolResultBlock|null,
     *     guardContent?: GuardrailConverseContentBlock|null,
     *     cachePoint?: CachePointBlock|null,
     *     reasoningContent?: ReasoningContentBlock|null,
     *     citationsContent?: CitationsContentBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
