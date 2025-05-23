<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $directConnectGatewayId
 * @property string|null $directConnectGatewayName
 * @property int|null $amazonSideAsn
 * @property string|null $ownerAccount
 * @property 'pending'|'available'|'deleting'|'deleted'|null $directConnectGatewayState
 * @property string|null $stateChangeError
 * @property list<Tag>|null $tags
 */
class DirectConnectGateway extends Shape
{
    /**
     * @param array{
     *     directConnectGatewayId?: string|null,
     *     directConnectGatewayName?: string|null,
     *     amazonSideAsn?: int|null,
     *     ownerAccount?: string|null,
     *     directConnectGatewayState?: 'pending'|'available'|'deleting'|'deleted'|null,
     *     stateChangeError?: string|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
