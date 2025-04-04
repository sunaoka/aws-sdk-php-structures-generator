<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EngineEdition
 * @property double|null $InstanceVcpu
 * @property double|null $InstanceMemory
 * @property int|null $StorageSize
 * @property int|null $StorageIops
 * @property string|null $DeploymentOption
 * @property string|null $EngineVersion
 */
class RdsRequirements extends Shape
{
    /**
     * @param array{
     *     EngineEdition?: string|null,
     *     InstanceVcpu?: double|null,
     *     InstanceMemory?: double|null,
     *     StorageSize?: int|null,
     *     StorageIops?: int|null,
     *     DeploymentOption?: string|null,
     *     EngineVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
