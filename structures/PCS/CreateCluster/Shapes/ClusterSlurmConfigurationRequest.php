<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $scaleDownIdleTimeInSeconds
 * @property list<SlurmCustomSetting>|null $slurmCustomSettings
 * @property AccountingRequest|null $accounting
 */
class ClusterSlurmConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     scaleDownIdleTimeInSeconds?: int<1, max>|null,
     *     slurmCustomSettings?: list<SlurmCustomSetting>|null,
     *     accounting?: AccountingRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
