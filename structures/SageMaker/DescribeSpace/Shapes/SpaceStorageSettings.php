<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsStorageSettings|null $EbsStorageSettings
 */
class SpaceStorageSettings extends Shape
{
    /**
     * @param array{EbsStorageSettings?: EbsStorageSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
