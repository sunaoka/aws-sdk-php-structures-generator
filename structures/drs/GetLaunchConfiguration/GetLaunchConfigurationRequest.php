<?php

namespace Sunaoka\Aws\Structures\drs\GetLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 */
class GetLaunchConfigurationRequest extends Request
{
    /**
     * @param array{sourceServerID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
