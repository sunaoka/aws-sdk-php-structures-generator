<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 * @property string $vpcId
 */
class TestGridVpcConfig extends Shape
{
    /**
     * @param array{
     *     securityGroupIds: list<string>,
     *     subnetIds: list<string>,
     *     vpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
