<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialStaticFileSource|null $StaticFileDataSource
 */
class GeospatialDataSourceItem extends Shape
{
    /**
     * @param array{StaticFileDataSource?: GeospatialStaticFileSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
