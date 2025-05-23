<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateAuthorityPublicKeyIdentifier
 * @property string $SigningKeyCertificate
 * @property string $ImportToken
 * @property string $WrappedKeyBlock
 * @property 'X9_TR34_2012' $KeyBlockFormat
 * @property string|null $RandomNonce
 */
class ImportTr34KeyBlock extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityPublicKeyIdentifier: string,
     *     SigningKeyCertificate: string,
     *     ImportToken: string,
     *     WrappedKeyBlock: string,
     *     KeyBlockFormat: 'X9_TR34_2012',
     *     RandomNonce?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
