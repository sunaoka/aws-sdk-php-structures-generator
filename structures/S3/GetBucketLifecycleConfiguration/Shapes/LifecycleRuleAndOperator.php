<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property list<Tag>|null $Tags
 * @property int|null $ObjectSizeGreaterThan
 * @property int|null $ObjectSizeLessThan
 */
class LifecycleRuleAndOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tags?: list<Tag>|null,
     *     ObjectSizeGreaterThan?: int|null,
     *     ObjectSizeLessThan?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
