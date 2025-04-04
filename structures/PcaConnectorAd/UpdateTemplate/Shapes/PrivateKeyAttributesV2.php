<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $CryptoProviders
 * @property 'KEY_EXCHANGE'|'SIGNATURE' $KeySpec
 * @property int<1, max> $MinimalKeyLength
 */
class PrivateKeyAttributesV2 extends Shape
{
    /**
     * @param array{
     *     CryptoProviders?: list<string>|null,
     *     KeySpec: 'KEY_EXCHANGE'|'SIGNATURE',
     *     MinimalKeyLength: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
