<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcPeeringConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowDnsResolutionFromRemoteVpc
 * @property bool|null $AllowEgressFromLocalClassicLinkToRemoteVpc
 * @property bool|null $AllowEgressFromLocalVpcToRemoteClassicLink
 */
class VpcPeeringConnectionOptionsDescription extends Shape
{
    /**
     * @param array{
     *     AllowDnsResolutionFromRemoteVpc?: bool|null,
     *     AllowEgressFromLocalClassicLinkToRemoteVpc?: bool|null,
     *     AllowEgressFromLocalVpcToRemoteClassicLink?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
