<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class SortDefinition extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
