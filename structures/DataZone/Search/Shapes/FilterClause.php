<?php

namespace Sunaoka\Aws\Structures\DataZone\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FilterClause>|null $and
 * @property Filter|null $filter
 * @property list<FilterClause>|null $or
 */
class FilterClause extends Shape
{
    /**
     * @param array{
     *     and?: list<FilterClause>|null,
     *     filter?: Filter|null,
     *     or?: list<FilterClause>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
