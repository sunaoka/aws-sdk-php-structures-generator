<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\RestoreBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
