<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClustersV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EBSStorageInfo|null $EbsStorageInfo
 */
class StorageInfo extends Shape
{
    /**
     * @param array{EbsStorageInfo?: EBSStorageInfo|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
