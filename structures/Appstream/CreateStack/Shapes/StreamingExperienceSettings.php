<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TCP'|'UDP'|null $PreferredProtocol
 */
class StreamingExperienceSettings extends Shape
{
    /**
     * @param array{PreferredProtocol?: 'TCP'|'UDP'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
