<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DaysAfterInitiation
 */
class AwsS3BucketBucketLifecycleConfigurationRulesAbortIncompleteMultipartUploadDetails extends Shape
{
    /**
     * @param array{DaysAfterInitiation?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
