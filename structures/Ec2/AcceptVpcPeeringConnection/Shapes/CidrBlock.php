<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptVpcPeeringConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CidrBlock
 */
class CidrBlock extends Shape
{
    /**
     * @param array{CidrBlock?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
