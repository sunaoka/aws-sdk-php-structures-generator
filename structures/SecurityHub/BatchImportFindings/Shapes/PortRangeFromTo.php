<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $From
 * @property int|null $To
 */
class PortRangeFromTo extends Shape
{
    /**
     * @param array{
     *     From?: int|null,
     *     To?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
