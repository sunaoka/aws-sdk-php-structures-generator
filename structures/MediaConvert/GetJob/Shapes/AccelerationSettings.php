<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|'PREFERRED' $Mode
 */
class AccelerationSettings extends Shape
{
    /**
     * @param array{Mode: 'DISABLED'|'ENABLED'|'PREFERRED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
