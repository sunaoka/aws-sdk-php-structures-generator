<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\AddTrustStoreRevocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrustStoreArn
 * @property int|null $RevocationId
 * @property 'CRL'|null $RevocationType
 * @property int|null $NumberOfRevokedEntries
 */
class TrustStoreRevocation extends Shape
{
    /**
     * @param array{
     *     TrustStoreArn?: string|null,
     *     RevocationId?: int|null,
     *     RevocationType?: 'CRL'|null,
     *     NumberOfRevokedEntries?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
