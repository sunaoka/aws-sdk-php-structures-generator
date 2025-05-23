<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateTransitGatewayRouteTableRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
