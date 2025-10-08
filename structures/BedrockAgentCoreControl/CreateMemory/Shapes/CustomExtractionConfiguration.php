<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemanticExtractionOverride|null $semanticExtractionOverride
 * @property UserPreferenceExtractionOverride|null $userPreferenceExtractionOverride
 */
class CustomExtractionConfiguration extends Shape
{
    /**
     * @param array{
     *     semanticExtractionOverride?: SemanticExtractionOverride|null,
     *     userPreferenceExtractionOverride?: UserPreferenceExtractionOverride|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
