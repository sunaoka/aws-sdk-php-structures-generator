<?php

namespace Sunaoka\Aws\Structures\Iam\UploadSSHPublicKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $SSHPublicKeyId
 * @property string $Fingerprint
 * @property string $SSHPublicKeyBody
 * @property 'Active'|'Inactive'|'Expired' $Status
 * @property \Aws\Api\DateTimeResult|null $UploadDate
 */
class SSHPublicKey extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     SSHPublicKeyId: string,
     *     Fingerprint: string,
     *     SSHPublicKeyBody: string,
     *     Status: 'Active'|'Inactive'|'Expired',
     *     UploadDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
