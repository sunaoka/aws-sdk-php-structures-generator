<?php

namespace Sunaoka\Aws\Structures\Waf\ListLoggingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextMarker
 * @property int<0, 100>|null $Limit
 */
class ListLoggingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     NextMarker?: string|null,
     *     Limit?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
