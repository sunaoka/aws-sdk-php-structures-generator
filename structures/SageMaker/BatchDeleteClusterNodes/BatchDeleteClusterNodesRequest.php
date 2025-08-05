<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDeleteClusterNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property list<string>|null $NodeIds
 * @property list<string>|null $NodeLogicalIds
 */
class BatchDeleteClusterNodesRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NodeIds?: list<string>|null,
     *     NodeLogicalIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
