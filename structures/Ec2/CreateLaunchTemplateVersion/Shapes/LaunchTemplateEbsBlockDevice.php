<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Encrypted
 * @property bool|null $DeleteOnTermination
 * @property int|null $Iops
 * @property string|null $KmsKeyId
 * @property string|null $SnapshotId
 * @property int|null $VolumeSize
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property int|null $Throughput
 */
class LaunchTemplateEbsBlockDevice extends Shape
{
    /**
     * @param array{
     *     Encrypted?: bool|null,
     *     DeleteOnTermination?: bool|null,
     *     Iops?: int|null,
     *     KmsKeyId?: string|null,
     *     SnapshotId?: string|null,
     *     VolumeSize?: int|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     Throughput?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
