<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaskContainerOverrides>|null $containers
 */
class TaskPropertiesOverride extends Shape
{
    /**
     * @param array{containers?: list<TaskContainerOverrides>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
