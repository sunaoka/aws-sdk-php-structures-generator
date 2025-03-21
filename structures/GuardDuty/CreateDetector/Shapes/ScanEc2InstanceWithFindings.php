<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EbsVolumes
 */
class ScanEc2InstanceWithFindings extends Shape
{
    /**
     * @param array{EbsVolumes?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
