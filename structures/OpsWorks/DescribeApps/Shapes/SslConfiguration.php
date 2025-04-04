<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Certificate
 * @property string $PrivateKey
 * @property string|null $Chain
 */
class SslConfiguration extends Shape
{
    /**
     * @param array{
     *     Certificate: string,
     *     PrivateKey: string,
     *     Chain?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
