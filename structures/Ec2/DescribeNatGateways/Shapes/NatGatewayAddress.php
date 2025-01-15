<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNatGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AllocationId
 * @property string|null $NetworkInterfaceId
 * @property string|null $PrivateIp
 * @property string|null $PublicIp
 * @property string|null $AssociationId
 * @property bool|null $IsPrimary
 * @property string|null $FailureMessage
 * @property 'assigning'|'unassigning'|'associating'|'disassociating'|'succeeded'|'failed'|null $Status
 */
class NatGatewayAddress extends Shape
{
    /**
     * @param array{
     *     AllocationId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     PrivateIp?: string|null,
     *     PublicIp?: string|null,
     *     AssociationId?: string|null,
     *     IsPrimary?: bool|null,
     *     FailureMessage?: string|null,
     *     Status?: 'assigning'|'unassigning'|'associating'|'disassociating'|'succeeded'|'failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
