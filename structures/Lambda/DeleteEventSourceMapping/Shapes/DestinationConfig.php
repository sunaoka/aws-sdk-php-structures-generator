<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OnSuccess|null $OnSuccess
 * @property OnFailure|null $OnFailure
 */
class DestinationConfig extends Shape
{
    /**
     * @param array{
     *     OnSuccess?: OnSuccess|null,
     *     OnFailure?: OnFailure|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
