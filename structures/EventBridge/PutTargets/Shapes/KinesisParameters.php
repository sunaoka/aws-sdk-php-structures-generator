<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PartitionKeyPath
 */
class KinesisParameters extends Shape
{
    /**
     * @param array{PartitionKeyPath: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
