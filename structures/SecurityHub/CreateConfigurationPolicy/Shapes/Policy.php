<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConfigurationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecurityHubPolicy|null $SecurityHub
 */
class Policy extends Shape
{
    /**
     * @param array{SecurityHub?: SecurityHubPolicy|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
