<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateJobForDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DeviceIds
 * @property Shapes\DeviceJobConfig|null $DeviceJobConfig
 * @property 'OTA'|'REBOOT' $JobType
 */
class CreateJobForDevicesRequest extends Request
{
    /**
     * @param array{
     *     DeviceIds: list<string>,
     *     DeviceJobConfig?: Shapes\DeviceJobConfig|null,
     *     JobType: 'OTA'|'REBOOT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
