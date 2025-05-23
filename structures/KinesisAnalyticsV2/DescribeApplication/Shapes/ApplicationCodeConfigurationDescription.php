<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PLAINTEXT'|'ZIPFILE' $CodeContentType
 * @property CodeContentDescription|null $CodeContentDescription
 */
class ApplicationCodeConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     CodeContentType: 'PLAINTEXT'|'ZIPFILE',
     *     CodeContentDescription?: CodeContentDescription|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
