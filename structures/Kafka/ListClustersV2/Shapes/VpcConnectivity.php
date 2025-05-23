<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClustersV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VpcConnectivityClientAuthentication|null $ClientAuthentication
 */
class VpcConnectivity extends Shape
{
    /**
     * @param array{ClientAuthentication?: VpcConnectivityClientAuthentication|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
