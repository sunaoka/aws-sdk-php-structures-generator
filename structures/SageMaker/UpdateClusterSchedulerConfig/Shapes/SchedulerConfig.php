<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSchedulerConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PriorityClass>|null $PriorityClasses
 * @property 'Enabled'|'Disabled'|null $FairShare
 */
class SchedulerConfig extends Shape
{
    /**
     * @param array{
     *     PriorityClasses?: list<PriorityClass>|null,
     *     FairShare?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
