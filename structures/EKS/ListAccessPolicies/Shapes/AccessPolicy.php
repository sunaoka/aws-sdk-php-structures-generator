<?php

namespace Sunaoka\Aws\Structures\EKS\ListAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 */
class AccessPolicy extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
