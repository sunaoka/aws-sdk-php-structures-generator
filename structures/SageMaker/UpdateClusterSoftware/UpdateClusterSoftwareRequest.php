<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSoftware;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property list<Shapes\UpdateClusterSoftwareInstanceGroupSpecification>|null $InstanceGroups
 * @property Shapes\DeploymentConfiguration|null $DeploymentConfig
 */
class UpdateClusterSoftwareRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     InstanceGroups?: list<Shapes\UpdateClusterSoftwareInstanceGroupSpecification>|null,
     *     DeploymentConfig?: Shapes\DeploymentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
