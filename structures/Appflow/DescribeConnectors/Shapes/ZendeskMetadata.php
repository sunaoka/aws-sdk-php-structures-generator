<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $oAuthScopes
 */
class ZendeskMetadata extends Shape
{
    /**
     * @param array{oAuthScopes?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
