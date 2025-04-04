<?php

namespace Sunaoka\Aws\Structures\MemoryDB\BatchUpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlotMigration|null $SlotMigration
 */
class ReshardingStatus extends Shape
{
    /**
     * @param array{SlotMigration?: SlotMigration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
