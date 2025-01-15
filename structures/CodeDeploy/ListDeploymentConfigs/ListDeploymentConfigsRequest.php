<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListDeploymentConfigsRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
