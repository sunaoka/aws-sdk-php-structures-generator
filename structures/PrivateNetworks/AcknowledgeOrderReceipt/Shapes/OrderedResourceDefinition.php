<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\AcknowledgeOrderReceipt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommitmentConfiguration|null $commitmentConfiguration
 * @property int<0, max> $count
 * @property 'RADIO_UNIT'|'DEVICE_IDENTIFIER' $type
 */
class OrderedResourceDefinition extends Shape
{
    /**
     * @param array{
     *     commitmentConfiguration?: CommitmentConfiguration|null,
     *     count: int<0, max>,
     *     type: 'RADIO_UNIT'|'DEVICE_IDENTIFIER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
