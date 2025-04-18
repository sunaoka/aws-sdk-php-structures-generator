<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAccessPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 */
class ProjectResource extends Shape
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
