<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcInterfaceName
 */
class VpcInterfaceAttachment extends Shape
{
    /**
     * @param array{VpcInterfaceName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
