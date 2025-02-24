<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Buckets
 * @property list<string>|null $Regions
 */
class Exclude extends Shape
{
    /**
     * @param array{
     *     Buckets?: list<string>|null,
     *     Regions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
