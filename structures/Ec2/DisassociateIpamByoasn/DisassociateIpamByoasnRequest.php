<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateIpamByoasn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $Asn
 * @property string $Cidr
 */
class DisassociateIpamByoasnRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Asn: string,
     *     Cidr: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
