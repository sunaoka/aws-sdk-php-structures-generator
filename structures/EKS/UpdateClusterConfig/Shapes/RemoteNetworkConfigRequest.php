<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RemoteNodeNetwork>|null $remoteNodeNetworks
 * @property list<RemotePodNetwork>|null $remotePodNetworks
 */
class RemoteNetworkConfigRequest extends Shape
{
    /**
     * @param array{
     *     remoteNodeNetworks?: list<RemoteNodeNetwork>|null,
     *     remotePodNetworks?: list<RemotePodNetwork>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
