<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomainUnit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupId
 */
class DomainUnitGroupProperties extends Shape
{
    /**
     * @param array{groupId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
