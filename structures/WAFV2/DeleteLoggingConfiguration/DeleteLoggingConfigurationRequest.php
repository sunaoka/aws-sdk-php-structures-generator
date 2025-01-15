<?php

namespace Sunaoka\Aws\Structures\WAFV2\DeleteLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property 'WAF_LOGS'|null $LogType
 * @property 'CUSTOMER'|'SECURITY_LAKE'|null $LogScope
 */
class DeleteLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     LogType?: 'WAF_LOGS'|null,
     *     LogScope?: 'CUSTOMER'|'SECURITY_LAKE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
