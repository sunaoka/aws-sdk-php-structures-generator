<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property int $size
 */
class KxCacheStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     size: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
