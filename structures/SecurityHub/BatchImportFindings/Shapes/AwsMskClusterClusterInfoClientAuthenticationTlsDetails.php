<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $CertificateAuthorityArnList
 * @property bool|null $Enabled
 */
class AwsMskClusterClusterInfoClientAuthenticationTlsDetails extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityArnList?: list<string>|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
