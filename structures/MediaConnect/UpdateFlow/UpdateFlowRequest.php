<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property Shapes\UpdateFailoverConfig|null $SourceFailoverConfig
 * @property Shapes\UpdateMaintenance|null $Maintenance
 * @property Shapes\MonitoringConfig|null $SourceMonitoringConfig
 * @property Shapes\NdiConfig|null $NdiConfig
 */
class UpdateFlowRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     SourceFailoverConfig?: Shapes\UpdateFailoverConfig|null,
     *     Maintenance?: Shapes\UpdateMaintenance|null,
     *     SourceMonitoringConfig?: Shapes\MonitoringConfig|null,
     *     NdiConfig?: Shapes\NdiConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
