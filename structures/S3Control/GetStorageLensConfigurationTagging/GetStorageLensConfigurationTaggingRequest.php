<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfigurationTagging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigId
 * @property string $AccountId
 */
class GetStorageLensConfigurationTaggingRequest extends Request
{
    /**
     * @param array{
     *     ConfigId: string,
     *     AccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
