<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StaticFileId
 */
class SheetImageStaticFileSource extends Shape
{
    /**
     * @param array{StaticFileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
