<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeId
 * @property bool|null $DryRun
 */
class DeleteVolumeRequest extends Request
{
    /**
     * @param array{
     *     VolumeId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
