<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteNetworkProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteNetworkProfileRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
