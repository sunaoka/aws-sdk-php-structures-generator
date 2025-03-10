<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property Shapes\SpotFleetRequestConfigData $SpotFleetRequestConfig
 */
class RequestSpotFleetRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     SpotFleetRequestConfig: Shapes\SpotFleetRequestConfigData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
