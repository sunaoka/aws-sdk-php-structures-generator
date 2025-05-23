<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SnapshotsEnabled
 */
class ApplicationSnapshotConfigurationDescription extends Shape
{
    /**
     * @param array{SnapshotsEnabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
