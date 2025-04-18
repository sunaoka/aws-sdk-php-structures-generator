<?php

namespace Sunaoka\Aws\Structures\Chime\GetSipMediaApplicationLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 */
class GetSipMediaApplicationLoggingConfigurationRequest extends Request
{
    /**
     * @param array{SipMediaApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
