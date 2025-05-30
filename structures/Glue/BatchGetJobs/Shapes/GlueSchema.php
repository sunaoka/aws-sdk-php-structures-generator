<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GlueStudioSchemaColumn>|null $Columns
 */
class GlueSchema extends Shape
{
    /**
     * @param array{Columns?: list<GlueStudioSchemaColumn>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
