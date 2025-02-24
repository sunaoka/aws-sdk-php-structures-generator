<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateSourceLocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseUrl
 */
class HttpConfiguration extends Shape
{
    /**
     * @param array{BaseUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
