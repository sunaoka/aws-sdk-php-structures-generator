<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateClientCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientCertificateId
 * @property list<Shapes\PatchOperation>|null $patchOperations
 */
class UpdateClientCertificateRequest extends Request
{
    /**
     * @param array{
     *     clientCertificateId: string,
     *     patchOperations?: list<Shapes\PatchOperation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
