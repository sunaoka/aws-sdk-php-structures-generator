<?php

namespace Sunaoka\Aws\Structures\Lambda\PutRuntimeManagementConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Auto'|'Manual'|'FunctionUpdate' $UpdateRuntimeOn
 * @property string $FunctionArn
 * @property string|null $RuntimeVersionArn
 */
class PutRuntimeManagementConfigResponse extends Response
{
}
