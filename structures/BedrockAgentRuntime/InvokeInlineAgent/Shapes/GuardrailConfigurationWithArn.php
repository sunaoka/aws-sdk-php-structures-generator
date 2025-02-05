<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $guardrailIdentifier
 * @property string $guardrailVersion
 */
class GuardrailConfigurationWithArn extends Shape
{
    /**
     * @param array{
     *     guardrailIdentifier: string,
     *     guardrailVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
