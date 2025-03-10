<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ControlName
 * @property list<ControlInputParameter>|null $ControlInputParameters
 * @property ControlScope|null $ControlScope
 */
class FrameworkControl extends Shape
{
    /**
     * @param array{
     *     ControlName: string,
     *     ControlInputParameters?: list<ControlInputParameter>|null,
     *     ControlScope?: ControlScope|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
