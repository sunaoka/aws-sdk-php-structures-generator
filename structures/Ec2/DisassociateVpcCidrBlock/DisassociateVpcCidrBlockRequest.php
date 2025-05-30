<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateVpcCidrBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 */
class DisassociateVpcCidrBlockRequest extends Request
{
    /**
     * @param array{AssociationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
