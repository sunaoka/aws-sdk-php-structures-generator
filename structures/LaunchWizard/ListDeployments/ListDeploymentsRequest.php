<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DeploymentFilter>|null $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\DeploymentFilter>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
