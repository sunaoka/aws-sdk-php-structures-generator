<?php

namespace Sunaoka\Aws\Structures\Redshift\RevokeClusterSecurityGroupIngress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSecurityGroupName
 * @property string|null $CIDRIP
 * @property string|null $EC2SecurityGroupName
 * @property string|null $EC2SecurityGroupOwnerId
 */
class RevokeClusterSecurityGroupIngressRequest extends Request
{
    /**
     * @param array{
     *     ClusterSecurityGroupName: string,
     *     CIDRIP?: string|null,
     *     EC2SecurityGroupName?: string|null,
     *     EC2SecurityGroupOwnerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
