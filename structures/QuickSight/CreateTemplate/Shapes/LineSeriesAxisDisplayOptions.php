<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AxisDisplayOptions|null $AxisOptions
 * @property list<MissingDataConfiguration>|null $MissingDataConfigurations
 */
class LineSeriesAxisDisplayOptions extends Shape
{
    /**
     * @param array{
     *     AxisOptions?: AxisDisplayOptions|null,
     *     MissingDataConfigurations?: list<MissingDataConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
