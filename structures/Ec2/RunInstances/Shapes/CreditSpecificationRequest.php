<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CpuCredits
 */
class CreditSpecificationRequest extends Shape
{
    /**
     * @param array{CpuCredits: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
