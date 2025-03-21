<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceSyncBlocker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 */
class SyncBlockerContext extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
