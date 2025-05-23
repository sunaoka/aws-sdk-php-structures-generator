<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DATERANGE'|null $AdMarkerHls
 */
class ScteHls extends Shape
{
    /**
     * @param array{AdMarkerHls?: 'DATERANGE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
