<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AvailabilityZoneCount
 */
class AwsOpenSearchServiceDomainClusterConfigZoneAwarenessConfigDetails extends Shape
{
    /**
     * @param array{AvailabilityZoneCount?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
