<?php

namespace Sunaoka\Aws\Structures\mgn\StartImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $createdCount
 * @property int<0, max>|null $modifiedCount
 */
class ImportTaskSummaryApplications extends Shape
{
    /**
     * @param array{
     *     createdCount?: int<0, max>|null,
     *     modifiedCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
