<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GROUNDING'|'RELEVANCE' $type
 * @property double $threshold
 */
class GuardrailContextualGroundingFilter extends Shape
{
    /**
     * @param array{
     *     type: 'GROUNDING'|'RELEVANCE',
     *     threshold: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
