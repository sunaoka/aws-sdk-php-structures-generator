<?php

namespace Sunaoka\Aws\Structures\MemoryDB\BatchUpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReshardingStatus|null $Resharding
 * @property ACLsUpdateStatus|null $ACLs
 * @property list<PendingModifiedServiceUpdate>|null $ServiceUpdates
 */
class ClusterPendingUpdates extends Shape
{
    /**
     * @param array{
     *     Resharding?: ReshardingStatus|null,
     *     ACLs?: ACLsUpdateStatus|null,
     *     ServiceUpdates?: list<PendingModifiedServiceUpdate>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
