<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3GlueDataCatalog|null $S3GlueDataCatalog
 */
class DataSourceType extends Shape
{
    /**
     * @param array{S3GlueDataCatalog?: S3GlueDataCatalog|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
