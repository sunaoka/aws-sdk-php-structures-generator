<?php

namespace Sunaoka\Aws\Structures\Iot\CancelCertificateTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 */
class CancelCertificateTransferRequest extends Request
{
    /**
     * @param array{certificateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
