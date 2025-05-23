<?php

namespace Sunaoka\Aws\Structures\Kms\DeriveSharedSecret;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KeyId
 * @property \Psr\Http\Message\StreamInterface $SharedSecret
 * @property \Psr\Http\Message\StreamInterface $CiphertextForRecipient
 * @property 'ECDH'|null $KeyAgreementAlgorithm
 * @property 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE'|null $KeyOrigin
 */
class DeriveSharedSecretResponse extends Response
{
}
