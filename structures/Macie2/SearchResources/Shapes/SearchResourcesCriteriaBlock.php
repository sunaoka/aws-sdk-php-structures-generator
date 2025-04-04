<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SearchResourcesCriteria>|null $and
 */
class SearchResourcesCriteriaBlock extends Shape
{
    /**
     * @param array{and?: list<SearchResourcesCriteria>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
