<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $intentLabelingGenerationAIPromptId
 * @property string|null $queryReformulationAIPromptId
 * @property string|null $answerGenerationAIPromptId
 * @property string|null $answerGenerationAIGuardrailId
 * @property list<AssociationConfiguration>|null $associationConfigurations
 * @property string|null $locale
 */
class AnswerRecommendationAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     intentLabelingGenerationAIPromptId?: string|null,
     *     queryReformulationAIPromptId?: string|null,
     *     answerGenerationAIPromptId?: string|null,
     *     answerGenerationAIGuardrailId?: string|null,
     *     associationConfigurations?: list<AssociationConfiguration>|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
