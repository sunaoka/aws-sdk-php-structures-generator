<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedEc2InstanceCapabilities $instanceCapabilities
 * @property ServiceManagedEc2InstanceMarketOptions $instanceMarketOptions
 * @property VpcConfiguration|null $vpcConfiguration
 * @property string|null $storageProfileId
 */
class ServiceManagedEc2FleetConfiguration extends Shape
{
    /**
     * @param array{
     *     instanceCapabilities: ServiceManagedEc2InstanceCapabilities,
     *     instanceMarketOptions: ServiceManagedEc2InstanceMarketOptions,
     *     vpcConfiguration?: VpcConfiguration|null,
     *     storageProfileId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
