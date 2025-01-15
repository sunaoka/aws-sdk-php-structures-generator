<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OptInStatus
 * @property string|null $RegionName
 * @property string|null $Endpoint
 */
class Region extends Shape
{
    /**
     * @param array{
     *     OptInStatus?: string|null,
     *     RegionName?: string|null,
     *     Endpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
