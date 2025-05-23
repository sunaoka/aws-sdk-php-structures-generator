<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetPlaybackConfigurationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
