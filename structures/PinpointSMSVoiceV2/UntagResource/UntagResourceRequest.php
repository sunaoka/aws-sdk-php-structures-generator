<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
