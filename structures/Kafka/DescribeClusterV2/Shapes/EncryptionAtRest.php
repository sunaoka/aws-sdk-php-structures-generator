<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataVolumeKMSKeyId
 */
class EncryptionAtRest extends Shape
{
    /**
     * @param array{DataVolumeKMSKeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
