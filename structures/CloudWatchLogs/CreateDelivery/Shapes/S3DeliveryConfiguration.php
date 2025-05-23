<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateDelivery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $suffixPath
 * @property bool|null $enableHiveCompatiblePath
 */
class S3DeliveryConfiguration extends Shape
{
    /**
     * @param array{
     *     suffixPath?: string|null,
     *     enableHiveCompatiblePath?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
