<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteCredentialLocker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteCredentialLockerRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
