<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteBGPPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cidr
 */
class RouteFilterPrefix extends Shape
{
    /**
     * @param array{cidr?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
