<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ScanOnPush
 */
class AwsEcrRepositoryImageScanningConfigurationDetails extends Shape
{
    /**
     * @param array{ScanOnPush?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
