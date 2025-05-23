<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteKeySigningKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string $Name
 */
class DeleteKeySigningKeyRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
