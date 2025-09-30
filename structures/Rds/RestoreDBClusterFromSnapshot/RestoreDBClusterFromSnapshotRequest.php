<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AvailabilityZones
 * @property string $DBClusterIdentifier
 * @property string $SnapshotIdentifier
 * @property string $Engine
 * @property string|null $EngineVersion
 * @property int|null $Port
 * @property string|null $DBSubnetGroupName
 * @property string|null $DatabaseName
 * @property string|null $OptionGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $KmsKeyId
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property int|null $BacktrackWindow
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property string|null $EngineMode
 * @property Shapes\ScalingConfiguration|null $ScalingConfiguration
 * @property string|null $DBClusterParameterGroupName
 * @property bool|null $DeletionProtection
 * @property bool|null $CopyTagsToSnapshot
 * @property string|null $Domain
 * @property string|null $DomainIAMRoleName
 * @property string|null $DBClusterInstanceClass
 * @property string|null $StorageType
 * @property int|null $Iops
 * @property bool|null $PubliclyAccessible
 * @property string|null $NetworkType
 * @property Shapes\ServerlessV2ScalingConfiguration|null $ServerlessV2ScalingConfiguration
 * @property Shapes\RdsCustomClusterConfiguration|null $RdsCustomClusterConfiguration
 * @property int|null $MonitoringInterval
 * @property string|null $MonitoringRoleArn
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property string|null $EngineLifecycleSupport
 */
class RestoreDBClusterFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     DBClusterIdentifier: string,
     *     SnapshotIdentifier: string,
     *     Engine: string,
     *     EngineVersion?: string|null,
     *     Port?: int|null,
     *     DBSubnetGroupName?: string|null,
     *     DatabaseName?: string|null,
     *     OptionGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     BacktrackWindow?: int|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     EngineMode?: string|null,
     *     ScalingConfiguration?: Shapes\ScalingConfiguration|null,
     *     DBClusterParameterGroupName?: string|null,
     *     DeletionProtection?: bool|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     Domain?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     DBClusterInstanceClass?: string|null,
     *     StorageType?: string|null,
     *     Iops?: int|null,
     *     PubliclyAccessible?: bool|null,
     *     NetworkType?: string|null,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration|null,
     *     RdsCustomClusterConfiguration?: Shapes\RdsCustomClusterConfiguration|null,
     *     MonitoringInterval?: int|null,
     *     MonitoringRoleArn?: string|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     EngineLifecycleSupport?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
