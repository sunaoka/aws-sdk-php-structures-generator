<?php

namespace Sunaoka\Aws\Structures\Sfn\ValidateStateMachineDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ERROR'|'WARNING' $severity
 * @property string $code
 * @property string $message
 * @property string|null $location
 */
class ValidateStateMachineDefinitionDiagnostic extends Shape
{
    /**
     * @param array{
     *     severity: 'ERROR'|'WARNING',
     *     code: string,
     *     message: string,
     *     location?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
