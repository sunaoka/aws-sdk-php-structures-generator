<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ClusterIssue>|null $issues
 */
class ClusterHealth extends Shape
{
    /**
     * @param array{issues?: list<ClusterIssue>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
