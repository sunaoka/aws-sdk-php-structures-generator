<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
