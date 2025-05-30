<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $url
 */
class RetrievalResultSharePointLocation extends Shape
{
    /**
     * @param array{url?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
