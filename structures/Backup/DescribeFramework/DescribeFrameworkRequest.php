<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FrameworkName
 */
class DescribeFrameworkRequest extends Request
{
    /**
     * @param array{FrameworkName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
