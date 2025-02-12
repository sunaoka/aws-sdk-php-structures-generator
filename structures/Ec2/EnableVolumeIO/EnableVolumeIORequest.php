<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableVolumeIO;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $VolumeId
 */
class EnableVolumeIORequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VolumeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
