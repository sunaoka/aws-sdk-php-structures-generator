<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\PutInvocationStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 */
class S3Location extends Shape
{
    /**
     * @param array{uri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
