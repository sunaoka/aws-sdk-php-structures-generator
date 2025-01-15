<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateIntegrationResourceProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 */
class SourceProcessingProperties extends Shape
{
    /**
     * @param array{RoleArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
