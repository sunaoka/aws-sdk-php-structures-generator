<?php

namespace Sunaoka\Aws\Structures\Swf\CountPendingDecisionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class TaskList extends Shape
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
