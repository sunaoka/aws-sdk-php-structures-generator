<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $attributeName
 * @property 'ASC'|'DESC'|null $orderBy
 */
class BucketSortCriteria extends Shape
{
    /**
     * @param array{
     *     attributeName?: string|null,
     *     orderBy?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
