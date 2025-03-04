<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEXUAL'|'VIOLENCE'|'HATE'|'INSULTS'|'MISCONDUCT'|'PROMPT_ATTACK' $type
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $inputStrength
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $outputStrength
 * @property list<'TEXT'|'IMAGE'>|null $inputModalities
 * @property list<'TEXT'|'IMAGE'>|null $outputModalities
 */
class GuardrailContentFilterConfig extends Shape
{
    /**
     * @param array{
     *     type: 'SEXUAL'|'VIOLENCE'|'HATE'|'INSULTS'|'MISCONDUCT'|'PROMPT_ATTACK',
     *     inputStrength: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     outputStrength: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     inputModalities?: list<'TEXT'|'IMAGE'>|null,
     *     outputModalities?: list<'TEXT'|'IMAGE'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
