<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheSecurityGroupName
 * @property string|null $Status
 */
class CacheSecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     CacheSecurityGroupName?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
