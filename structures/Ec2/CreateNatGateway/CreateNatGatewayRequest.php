<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNatGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AllocationId
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property string $SubnetId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'private'|'public'|null $ConnectivityType
 * @property string|null $PrivateIpAddress
 * @property list<string>|null $SecondaryAllocationIds
 * @property list<string>|null $SecondaryPrivateIpAddresses
 * @property int<1, 31>|null $SecondaryPrivateIpAddressCount
 */
class CreateNatGatewayRequest extends Request
{
    /**
     * @param array{
     *     AllocationId?: string|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     SubnetId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ConnectivityType?: 'private'|'public'|null,
     *     PrivateIpAddress?: string|null,
     *     SecondaryAllocationIds?: list<string>|null,
     *     SecondaryPrivateIpAddresses?: list<string>|null,
     *     SecondaryPrivateIpAddressCount?: int<1, 31>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
