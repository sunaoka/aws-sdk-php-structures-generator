<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROFANITY' $type
 */
class GuardrailManagedWordsConfig extends Shape
{
    /**
     * @param array{type: 'PROFANITY'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
