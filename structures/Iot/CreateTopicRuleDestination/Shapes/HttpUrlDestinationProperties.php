<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRuleDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $confirmationUrl
 */
class HttpUrlDestinationProperties extends Shape
{
    /**
     * @param array{confirmationUrl?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
