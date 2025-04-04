<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartResourceStateUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $amis
 * @property bool|null $snapshots
 * @property bool|null $containers
 */
class ResourceStateUpdateIncludeResources extends Shape
{
    /**
     * @param array{
     *     amis?: bool|null,
     *     snapshots?: bool|null,
     *     containers?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
