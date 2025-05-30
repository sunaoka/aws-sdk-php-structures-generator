<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv6Address
 * @property string|null $PublicIpv6DnsName
 * @property bool|null $IsPrimaryIpv6
 */
class NetworkInterfaceIpv6Address extends Shape
{
    /**
     * @param array{
     *     Ipv6Address?: string|null,
     *     PublicIpv6DnsName?: string|null,
     *     IsPrimaryIpv6?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
