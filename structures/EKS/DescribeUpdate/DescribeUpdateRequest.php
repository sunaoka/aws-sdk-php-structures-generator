<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $updateId
 * @property string|null $nodegroupName
 * @property string|null $addonName
 */
class DescribeUpdateRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     updateId: string,
     *     nodegroupName?: string|null,
     *     addonName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
