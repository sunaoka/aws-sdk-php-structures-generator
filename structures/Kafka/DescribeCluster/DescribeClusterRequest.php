<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 */
class DescribeClusterRequest extends Request
{
    /**
     * @param array{ClusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
