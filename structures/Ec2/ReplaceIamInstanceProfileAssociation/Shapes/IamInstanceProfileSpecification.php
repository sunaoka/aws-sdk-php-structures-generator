<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceIamInstanceProfileAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 */
class IamInstanceProfileSpecification extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
