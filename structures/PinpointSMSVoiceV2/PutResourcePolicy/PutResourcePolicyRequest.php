<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $Policy
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
