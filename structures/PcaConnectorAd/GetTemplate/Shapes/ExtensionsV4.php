<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApplicationPolicies|null $ApplicationPolicies
 * @property KeyUsage $KeyUsage
 */
class ExtensionsV4 extends Shape
{
    /**
     * @param array{
     *     ApplicationPolicies?: ApplicationPolicies|null,
     *     KeyUsage: KeyUsage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
