<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelBundleTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Message
 */
class BundleTaskError extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
