<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailWordConfig>|null $wordsConfig
 * @property list<GuardrailManagedWordsConfig>|null $managedWordListsConfig
 */
class AIGuardrailWordPolicyConfig extends Shape
{
    /**
     * @param array{
     *     wordsConfig?: list<GuardrailWordConfig>|null,
     *     managedWordListsConfig?: list<GuardrailManagedWordsConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
