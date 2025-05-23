<?php

namespace Sunaoka\Aws\Structures\Redshift\DeletePartner;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ClusterIdentifier
 * @property string $DatabaseName
 * @property string $PartnerName
 */
class DeletePartnerRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ClusterIdentifier: string,
     *     DatabaseName: string,
     *     PartnerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
