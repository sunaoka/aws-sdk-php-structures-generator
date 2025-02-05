<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $botResponse
 * @property string|null $inputTranscript
 * @property int $turnNumber
 */
class SelfServiceConversationHistory extends Shape
{
    /**
     * @param array{
     *     botResponse?: string|null,
     *     inputTranscript?: string|null,
     *     turnNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
