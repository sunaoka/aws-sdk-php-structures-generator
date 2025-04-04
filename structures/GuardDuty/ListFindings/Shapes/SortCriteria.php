<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property 'ASC'|'DESC'|null $OrderBy
 */
class SortCriteria extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     OrderBy?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
