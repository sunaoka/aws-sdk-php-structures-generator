<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 */
class Phase2EncryptionAlgorithmsListValue extends Shape
{
    /**
     * @param array{Value?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
