<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogStreamARN
 */
class CloudWatchLoggingOption extends Shape
{
    /**
     * @param array{LogStreamARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
