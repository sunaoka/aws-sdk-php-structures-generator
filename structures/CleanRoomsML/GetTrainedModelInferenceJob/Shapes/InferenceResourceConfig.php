<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModelInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ml.r7i.48xlarge'|'ml.r6i.16xlarge'|'ml.m6i.xlarge'|'ml.m5.4xlarge'|'ml.p2.xlarge'|'ml.m4.16xlarge'|'ml.r7i.16xlarge'|'ml.m7i.xlarge'|'ml.m6i.12xlarge'|'ml.r7i.8xlarge'|'ml.r7i.large'|'ml.m7i.12xlarge'|'ml.m6i.24xlarge'|'ml.m7i.24xlarge'|'ml.r6i.8xlarge'|'ml.r6i.large'|'ml.g5.2xlarge'|'ml.m5.large'|'ml.p3.16xlarge'|'ml.m7i.48xlarge'|'ml.m6i.16xlarge'|'ml.p2.16xlarge'|'ml.g5.4xlarge'|'ml.m7i.16xlarge'|'ml.c4.2xlarge'|'ml.c5.2xlarge'|'ml.c6i.32xlarge'|'ml.c4.4xlarge'|'ml.g5.8xlarge'|'ml.c6i.xlarge'|'ml.c5.4xlarge'|'ml.g4dn.xlarge'|'ml.c7i.xlarge'|'ml.c6i.12xlarge'|'ml.g4dn.12xlarge'|'ml.c7i.12xlarge'|'ml.c6i.24xlarge'|'ml.g4dn.2xlarge'|'ml.c7i.24xlarge'|'ml.c7i.2xlarge'|'ml.c4.8xlarge'|'ml.c6i.2xlarge'|'ml.g4dn.4xlarge'|'ml.c7i.48xlarge'|'ml.c7i.4xlarge'|'ml.c6i.16xlarge'|'ml.c5.9xlarge'|'ml.g4dn.16xlarge'|'ml.c7i.16xlarge'|'ml.c6i.4xlarge'|'ml.c5.xlarge'|'ml.c4.xlarge'|'ml.g4dn.8xlarge'|'ml.c7i.8xlarge'|'ml.c7i.large'|'ml.g5.xlarge'|'ml.c6i.8xlarge'|'ml.c6i.large'|'ml.g5.12xlarge'|'ml.g5.24xlarge'|'ml.m7i.2xlarge'|'ml.c5.18xlarge'|'ml.g5.48xlarge'|'ml.m6i.2xlarge'|'ml.g5.16xlarge'|'ml.m7i.4xlarge'|'ml.p3.2xlarge'|'ml.r6i.32xlarge'|'ml.m6i.4xlarge'|'ml.m5.xlarge'|'ml.m4.10xlarge'|'ml.r6i.xlarge'|'ml.m5.12xlarge'|'ml.m4.xlarge'|'ml.r7i.2xlarge'|'ml.r7i.xlarge'|'ml.r6i.12xlarge'|'ml.m5.24xlarge'|'ml.r7i.12xlarge'|'ml.m7i.8xlarge'|'ml.m7i.large'|'ml.r6i.24xlarge'|'ml.r6i.2xlarge'|'ml.m4.2xlarge'|'ml.r7i.24xlarge'|'ml.r7i.4xlarge'|'ml.m6i.8xlarge'|'ml.m6i.large'|'ml.m5.2xlarge'|'ml.p2.8xlarge'|'ml.r6i.4xlarge'|'ml.m6i.32xlarge'|'ml.p3.8xlarge'|'ml.m4.4xlarge' $instanceType
 * @property int<1, 10> $instanceCount
 */
class InferenceResourceConfig extends Shape
{
    /**
     * @param array{
     *     instanceType: 'ml.r7i.48xlarge'|'ml.r6i.16xlarge'|'ml.m6i.xlarge'|'ml.m5.4xlarge'|'ml.p2.xlarge'|'ml.m4.16xlarge'|'ml.r7i.16xlarge'|'ml.m7i.xlarge'|'ml.m6i.12xlarge'|'ml.r7i.8xlarge'|'ml.r7i.large'|'ml.m7i.12xlarge'|'ml.m6i.24xlarge'|'ml.m7i.24xlarge'|'ml.r6i.8xlarge'|'ml.r6i.large'|'ml.g5.2xlarge'|'ml.m5.large'|'ml.p3.16xlarge'|'ml.m7i.48xlarge'|'ml.m6i.16xlarge'|'ml.p2.16xlarge'|'ml.g5.4xlarge'|'ml.m7i.16xlarge'|'ml.c4.2xlarge'|'ml.c5.2xlarge'|'ml.c6i.32xlarge'|'ml.c4.4xlarge'|'ml.g5.8xlarge'|'ml.c6i.xlarge'|'ml.c5.4xlarge'|'ml.g4dn.xlarge'|'ml.c7i.xlarge'|'ml.c6i.12xlarge'|'ml.g4dn.12xlarge'|'ml.c7i.12xlarge'|'ml.c6i.24xlarge'|'ml.g4dn.2xlarge'|'ml.c7i.24xlarge'|'ml.c7i.2xlarge'|'ml.c4.8xlarge'|'ml.c6i.2xlarge'|'ml.g4dn.4xlarge'|'ml.c7i.48xlarge'|'ml.c7i.4xlarge'|'ml.c6i.16xlarge'|'ml.c5.9xlarge'|'ml.g4dn.16xlarge'|'ml.c7i.16xlarge'|'ml.c6i.4xlarge'|'ml.c5.xlarge'|'ml.c4.xlarge'|'ml.g4dn.8xlarge'|'ml.c7i.8xlarge'|'ml.c7i.large'|'ml.g5.xlarge'|'ml.c6i.8xlarge'|'ml.c6i.large'|'ml.g5.12xlarge'|'ml.g5.24xlarge'|'ml.m7i.2xlarge'|'ml.c5.18xlarge'|'ml.g5.48xlarge'|'ml.m6i.2xlarge'|'ml.g5.16xlarge'|'ml.m7i.4xlarge'|'ml.p3.2xlarge'|'ml.r6i.32xlarge'|'ml.m6i.4xlarge'|'ml.m5.xlarge'|'ml.m4.10xlarge'|'ml.r6i.xlarge'|'ml.m5.12xlarge'|'ml.m4.xlarge'|'ml.r7i.2xlarge'|'ml.r7i.xlarge'|'ml.r6i.12xlarge'|'ml.m5.24xlarge'|'ml.r7i.12xlarge'|'ml.m7i.8xlarge'|'ml.m7i.large'|'ml.r6i.24xlarge'|'ml.r6i.2xlarge'|'ml.m4.2xlarge'|'ml.r7i.24xlarge'|'ml.r7i.4xlarge'|'ml.m6i.8xlarge'|'ml.m6i.large'|'ml.m5.2xlarge'|'ml.p2.8xlarge'|'ml.r6i.4xlarge'|'ml.m6i.32xlarge'|'ml.p3.8xlarge'|'ml.m4.4xlarge',
     *     instanceCount?: int<1, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
