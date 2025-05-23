<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateInferenceScheduler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InferenceS3OutputConfiguration $S3OutputConfiguration
 * @property string|null $KmsKeyId
 */
class InferenceOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     S3OutputConfiguration: InferenceS3OutputConfiguration,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
