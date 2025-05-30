<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $completion
 * @property list<DataSummary>|null $references
 * @property string|null $nextChunkToken
 */
class GenerativeChunkDataDetails extends Shape
{
    /**
     * @param array{
     *     completion?: string|null,
     *     references?: list<DataSummary>|null,
     *     nextChunkToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
