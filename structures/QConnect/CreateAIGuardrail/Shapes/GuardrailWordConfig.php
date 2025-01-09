<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 */
class GuardrailWordConfig extends Shape
{
    /**
     * @param array{text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
