<?php

namespace Sunaoka\Aws\Structures\QuickSight\GenerateEmbedUrlForRegisteredUserWithIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatePersistenceConfigurations|null $StatePersistence
 * @property SharedViewConfigurations|null $SharedView
 * @property AmazonQInQuickSightConsoleConfigurations|null $AmazonQInQuickSight
 * @property SchedulesConfigurations|null $Schedules
 * @property RecentSnapshotsConfigurations|null $RecentSnapshots
 * @property ThresholdAlertsConfigurations|null $ThresholdAlerts
 */
class RegisteredUserConsoleFeatureConfigurations extends Shape
{
    /**
     * @param array{
     *     StatePersistence?: StatePersistenceConfigurations|null,
     *     SharedView?: SharedViewConfigurations|null,
     *     AmazonQInQuickSight?: AmazonQInQuickSightConsoleConfigurations|null,
     *     Schedules?: SchedulesConfigurations|null,
     *     RecentSnapshots?: RecentSnapshotsConfigurations|null,
     *     ThresholdAlerts?: ThresholdAlertsConfigurations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
