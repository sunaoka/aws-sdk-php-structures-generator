<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRouteTableVirtualInterfaceGroupAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayRouteTableVirtualInterfaceGroupAssociationId
 * @property bool|null $DryRun
 */
class DeleteLocalGatewayRouteTableVirtualInterfaceGroupAssociationRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableVirtualInterfaceGroupAssociationId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
