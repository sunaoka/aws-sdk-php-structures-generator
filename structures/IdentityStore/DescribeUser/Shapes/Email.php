<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property string|null $Type
 * @property bool|null $Primary
 */
class Email extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Type?: string|null,
     *     Primary?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
