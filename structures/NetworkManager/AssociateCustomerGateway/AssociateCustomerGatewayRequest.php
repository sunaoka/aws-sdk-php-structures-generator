<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateCustomerGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomerGatewayArn
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property string|null $LinkId
 */
class AssociateCustomerGatewayRequest extends Request
{
    /**
     * @param array{
     *     CustomerGatewayArn: string,
     *     GlobalNetworkId: string,
     *     DeviceId: string,
     *     LinkId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
