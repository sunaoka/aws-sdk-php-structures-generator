<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 */
class TargetResource extends Shape
{
    /**
     * @param array{assetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
