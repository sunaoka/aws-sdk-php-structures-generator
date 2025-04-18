<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $PublishMQCS
 */
class OutputHeaderConfiguration extends Shape
{
    /**
     * @param array{PublishMQCS?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
