<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelBiasJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $InstanceCount
 * @property 'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge'|'ml.m4.xlarge'|'ml.m4.2xlarge'|'ml.m4.4xlarge'|'ml.m4.10xlarge'|'ml.m4.16xlarge'|'ml.c4.xlarge'|'ml.c4.2xlarge'|'ml.c4.4xlarge'|'ml.c4.8xlarge'|'ml.p2.xlarge'|'ml.p2.8xlarge'|'ml.p2.16xlarge'|'ml.p3.2xlarge'|'ml.p3.8xlarge'|'ml.p3.16xlarge'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.18xlarge'|'ml.m5.large'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.12xlarge'|'ml.m5.24xlarge'|'ml.r5.large'|'ml.r5.xlarge'|'ml.r5.2xlarge'|'ml.r5.4xlarge'|'ml.r5.8xlarge'|'ml.r5.12xlarge'|'ml.r5.16xlarge'|'ml.r5.24xlarge'|'ml.g4dn.xlarge'|'ml.g4dn.2xlarge'|'ml.g4dn.4xlarge'|'ml.g4dn.8xlarge'|'ml.g4dn.12xlarge'|'ml.g4dn.16xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.16xlarge'|'ml.g5.12xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.r5d.large'|'ml.r5d.xlarge'|'ml.r5d.2xlarge'|'ml.r5d.4xlarge'|'ml.r5d.8xlarge'|'ml.r5d.12xlarge'|'ml.r5d.16xlarge'|'ml.r5d.24xlarge'|'ml.g6.xlarge'|'ml.g6.2xlarge'|'ml.g6.4xlarge'|'ml.g6.8xlarge'|'ml.g6.12xlarge'|'ml.g6.16xlarge'|'ml.g6.24xlarge'|'ml.g6.48xlarge'|'ml.g6e.xlarge'|'ml.g6e.2xlarge'|'ml.g6e.4xlarge'|'ml.g6e.8xlarge'|'ml.g6e.12xlarge'|'ml.g6e.16xlarge'|'ml.g6e.24xlarge'|'ml.g6e.48xlarge'|'ml.m6i.large'|'ml.m6i.xlarge'|'ml.m6i.2xlarge'|'ml.m6i.4xlarge'|'ml.m6i.8xlarge'|'ml.m6i.12xlarge'|'ml.m6i.16xlarge'|'ml.m6i.24xlarge'|'ml.m6i.32xlarge'|'ml.c6i.xlarge'|'ml.c6i.2xlarge'|'ml.c6i.4xlarge'|'ml.c6i.8xlarge'|'ml.c6i.12xlarge'|'ml.c6i.16xlarge'|'ml.c6i.24xlarge'|'ml.c6i.32xlarge'|'ml.m7i.large'|'ml.m7i.xlarge'|'ml.m7i.2xlarge'|'ml.m7i.4xlarge'|'ml.m7i.8xlarge'|'ml.m7i.12xlarge'|'ml.m7i.16xlarge'|'ml.m7i.24xlarge'|'ml.m7i.48xlarge'|'ml.c7i.large'|'ml.c7i.xlarge'|'ml.c7i.2xlarge'|'ml.c7i.4xlarge'|'ml.c7i.8xlarge'|'ml.c7i.12xlarge'|'ml.c7i.16xlarge'|'ml.c7i.24xlarge'|'ml.c7i.48xlarge'|'ml.r7i.large'|'ml.r7i.xlarge'|'ml.r7i.2xlarge'|'ml.r7i.4xlarge'|'ml.r7i.8xlarge'|'ml.r7i.12xlarge'|'ml.r7i.16xlarge'|'ml.r7i.24xlarge'|'ml.r7i.48xlarge' $InstanceType
 * @property int<1, 16384> $VolumeSizeInGB
 * @property string|null $VolumeKmsKeyId
 */
class MonitoringClusterConfig extends Shape
{
    /**
     * @param array{
     *     InstanceCount: int<1, 100>,
     *     InstanceType: 'ml.t3.medium'|'ml.t3.large'|'ml.t3.xlarge'|'ml.t3.2xlarge'|'ml.m4.xlarge'|'ml.m4.2xlarge'|'ml.m4.4xlarge'|'ml.m4.10xlarge'|'ml.m4.16xlarge'|'ml.c4.xlarge'|'ml.c4.2xlarge'|'ml.c4.4xlarge'|'ml.c4.8xlarge'|'ml.p2.xlarge'|'ml.p2.8xlarge'|'ml.p2.16xlarge'|'ml.p3.2xlarge'|'ml.p3.8xlarge'|'ml.p3.16xlarge'|'ml.c5.xlarge'|'ml.c5.2xlarge'|'ml.c5.4xlarge'|'ml.c5.9xlarge'|'ml.c5.18xlarge'|'ml.m5.large'|'ml.m5.xlarge'|'ml.m5.2xlarge'|'ml.m5.4xlarge'|'ml.m5.12xlarge'|'ml.m5.24xlarge'|'ml.r5.large'|'ml.r5.xlarge'|'ml.r5.2xlarge'|'ml.r5.4xlarge'|'ml.r5.8xlarge'|'ml.r5.12xlarge'|'ml.r5.16xlarge'|'ml.r5.24xlarge'|'ml.g4dn.xlarge'|'ml.g4dn.2xlarge'|'ml.g4dn.4xlarge'|'ml.g4dn.8xlarge'|'ml.g4dn.12xlarge'|'ml.g4dn.16xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.16xlarge'|'ml.g5.12xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.r5d.large'|'ml.r5d.xlarge'|'ml.r5d.2xlarge'|'ml.r5d.4xlarge'|'ml.r5d.8xlarge'|'ml.r5d.12xlarge'|'ml.r5d.16xlarge'|'ml.r5d.24xlarge'|'ml.g6.xlarge'|'ml.g6.2xlarge'|'ml.g6.4xlarge'|'ml.g6.8xlarge'|'ml.g6.12xlarge'|'ml.g6.16xlarge'|'ml.g6.24xlarge'|'ml.g6.48xlarge'|'ml.g6e.xlarge'|'ml.g6e.2xlarge'|'ml.g6e.4xlarge'|'ml.g6e.8xlarge'|'ml.g6e.12xlarge'|'ml.g6e.16xlarge'|'ml.g6e.24xlarge'|'ml.g6e.48xlarge'|'ml.m6i.large'|'ml.m6i.xlarge'|'ml.m6i.2xlarge'|'ml.m6i.4xlarge'|'ml.m6i.8xlarge'|'ml.m6i.12xlarge'|'ml.m6i.16xlarge'|'ml.m6i.24xlarge'|'ml.m6i.32xlarge'|'ml.c6i.xlarge'|'ml.c6i.2xlarge'|'ml.c6i.4xlarge'|'ml.c6i.8xlarge'|'ml.c6i.12xlarge'|'ml.c6i.16xlarge'|'ml.c6i.24xlarge'|'ml.c6i.32xlarge'|'ml.m7i.large'|'ml.m7i.xlarge'|'ml.m7i.2xlarge'|'ml.m7i.4xlarge'|'ml.m7i.8xlarge'|'ml.m7i.12xlarge'|'ml.m7i.16xlarge'|'ml.m7i.24xlarge'|'ml.m7i.48xlarge'|'ml.c7i.large'|'ml.c7i.xlarge'|'ml.c7i.2xlarge'|'ml.c7i.4xlarge'|'ml.c7i.8xlarge'|'ml.c7i.12xlarge'|'ml.c7i.16xlarge'|'ml.c7i.24xlarge'|'ml.c7i.48xlarge'|'ml.r7i.large'|'ml.r7i.xlarge'|'ml.r7i.2xlarge'|'ml.r7i.4xlarge'|'ml.r7i.8xlarge'|'ml.r7i.12xlarge'|'ml.r7i.16xlarge'|'ml.r7i.24xlarge'|'ml.r7i.48xlarge',
     *     VolumeSizeInGB: int<1, 16384>,
     *     VolumeKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
