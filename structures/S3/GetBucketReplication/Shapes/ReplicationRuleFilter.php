<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property Tag|null $Tag
 * @property ReplicationRuleAndOperator|null $And
 */
class ReplicationRuleFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tag?: Tag|null,
     *     And?: ReplicationRuleAndOperator|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
