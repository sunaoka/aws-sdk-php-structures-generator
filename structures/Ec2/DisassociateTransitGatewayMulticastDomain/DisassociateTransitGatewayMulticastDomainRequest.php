<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTransitGatewayMulticastDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayMulticastDomainId
 * @property string $TransitGatewayAttachmentId
 * @property list<string> $SubnetIds
 * @property bool|null $DryRun
 */
class DisassociateTransitGatewayMulticastDomainRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId: string,
     *     TransitGatewayAttachmentId: string,
     *     SubnetIds: list<string>,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
