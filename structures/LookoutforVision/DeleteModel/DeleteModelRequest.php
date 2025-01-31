<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DeleteModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ModelVersion
 * @property string|null $ClientToken
 */
class DeleteModelRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ModelVersion: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
