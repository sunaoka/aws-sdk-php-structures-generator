<?php

namespace Sunaoka\Aws\Structures\Translate\UpdateParallelData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\ParallelDataConfig $ParallelDataConfig
 * @property string $ClientToken
 */
class UpdateParallelDataRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ParallelDataConfig: Shapes\ParallelDataConfig,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
