<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateFaceLivenessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Bucket
 * @property string|null $S3KeyPrefix
 */
class LivenessOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3Bucket: string,
     *     S3KeyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
