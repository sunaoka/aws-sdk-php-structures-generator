<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemanticMemoryStrategyInput|null $semanticMemoryStrategy
 * @property SummaryMemoryStrategyInput|null $summaryMemoryStrategy
 * @property UserPreferenceMemoryStrategyInput|null $userPreferenceMemoryStrategy
 * @property CustomMemoryStrategyInput|null $customMemoryStrategy
 */
class MemoryStrategyInput extends Shape
{
    /**
     * @param array{
     *     semanticMemoryStrategy?: SemanticMemoryStrategyInput|null,
     *     summaryMemoryStrategy?: SummaryMemoryStrategyInput|null,
     *     userPreferenceMemoryStrategy?: UserPreferenceMemoryStrategyInput|null,
     *     customMemoryStrategy?: CustomMemoryStrategyInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
