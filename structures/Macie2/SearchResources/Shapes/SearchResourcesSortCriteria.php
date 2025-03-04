<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCOUNT_ID'|'RESOURCE_NAME'|'S3_CLASSIFIABLE_OBJECT_COUNT'|'S3_CLASSIFIABLE_SIZE_IN_BYTES'|null $attributeName
 * @property 'ASC'|'DESC'|null $orderBy
 */
class SearchResourcesSortCriteria extends Shape
{
    /**
     * @param array{
     *     attributeName?: 'ACCOUNT_ID'|'RESOURCE_NAME'|'S3_CLASSIFIABLE_OBJECT_COUNT'|'S3_CLASSIFIABLE_SIZE_IN_BYTES'|null,
     *     orderBy?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
