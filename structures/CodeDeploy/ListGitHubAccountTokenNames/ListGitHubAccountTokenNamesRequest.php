<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListGitHubAccountTokenNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListGitHubAccountTokenNamesRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
