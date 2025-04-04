<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LastRunTime
 */
class AutomatedDiscoveryInformation extends Shape
{
    /**
     * @param array{LastRunTime?: \Aws\Api\DateTimeResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
