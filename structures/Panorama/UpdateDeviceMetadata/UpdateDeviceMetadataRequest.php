<?php

namespace Sunaoka\Aws\Structures\Panorama\UpdateDeviceMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $DeviceId
 */
class UpdateDeviceMetadataRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DeviceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
