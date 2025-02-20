<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsEnabled
 */
class CloudWatchMetrics extends Shape
{
    /**
     * @param array{IsEnabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
