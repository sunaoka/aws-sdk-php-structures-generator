<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DetachVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeARN
 * @property bool|null $ForceDetach
 */
class DetachVolumeRequest extends Request
{
    /**
     * @param array{
     *     VolumeARN: string,
     *     ForceDetach?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
