<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogicalInterfaceName
 * @property 'NAT'|'BRIDGE'|null $NetworkInterfaceMode
 * @property string|null $PhysicalInterfaceName
 */
class NodeInterfaceMapping extends Shape
{
    /**
     * @param array{
     *     LogicalInterfaceName?: string|null,
     *     NetworkInterfaceMode?: 'NAT'|'BRIDGE'|null,
     *     PhysicalInterfaceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
