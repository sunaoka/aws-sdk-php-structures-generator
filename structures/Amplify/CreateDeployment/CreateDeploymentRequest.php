<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property array<string, string>|null $fileMap
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     fileMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
