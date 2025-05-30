<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamResourceDiscovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 */
class RemoveIpamOperatingRegion extends Shape
{
    /**
     * @param array{RegionName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
