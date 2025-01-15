<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeByoipCidrs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property string|null $Description
 * @property list<AsnAssociation>|null $AsnAssociations
 * @property string|null $StatusMessage
 * @property 'advertised'|'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-deprovision'|'pending-provision'|'provisioned'|'provisioned-not-publicly-advertisable'|null $State
 * @property string|null $NetworkBorderGroup
 */
class ByoipCidr extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     Description?: string|null,
     *     AsnAssociations?: list<AsnAssociation>|null,
     *     StatusMessage?: string|null,
     *     State?: 'advertised'|'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-deprovision'|'pending-provision'|'provisioned'|'provisioned-not-publicly-advertisable'|null,
     *     NetworkBorderGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
