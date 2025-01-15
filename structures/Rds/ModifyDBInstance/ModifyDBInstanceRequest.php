<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property int|null $AllocatedStorage
 * @property string|null $DBInstanceClass
 * @property string|null $DBSubnetGroupName
 * @property list<string>|null $DBSecurityGroups
 * @property list<string>|null $VpcSecurityGroupIds
 * @property bool|null $ApplyImmediately
 * @property string|null $MasterUserPassword
 * @property string|null $DBParameterGroupName
 * @property int|null $BackupRetentionPeriod
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property bool|null $AllowMajorVersionUpgrade
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $LicenseModel
 * @property int|null $Iops
 * @property string|null $OptionGroupName
 * @property string|null $NewDBInstanceIdentifier
 * @property string|null $StorageType
 * @property string|null $TdeCredentialArn
 * @property string|null $TdeCredentialPassword
 * @property string|null $CACertificateIdentifier
 * @property string|null $Domain
 * @property string|null $DomainFqdn
 * @property string|null $DomainOu
 * @property string|null $DomainAuthSecretArn
 * @property list<string>|null $DomainDnsIps
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $MonitoringInterval
 * @property int|null $DBPortNumber
 * @property bool|null $PubliclyAccessible
 * @property string|null $MonitoringRoleArn
 * @property string|null $DomainIAMRoleName
 * @property bool|null $DisableDomain
 * @property int|null $PromotionTier
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property 'standard'|'advanced'|null $DatabaseInsightsMode
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property Shapes\CloudwatchLogsExportConfiguration|null $CloudwatchLogsExportConfiguration
 * @property list<Shapes\ProcessorFeature>|null $ProcessorFeatures
 * @property bool|null $UseDefaultProcessorFeatures
 * @property bool|null $DeletionProtection
 * @property int|null $MaxAllocatedStorage
 * @property bool|null $CertificateRotationRestart
 * @property 'open-read-only'|'mounted'|null $ReplicaMode
 * @property bool|null $EnableCustomerOwnedIp
 * @property string|null $AwsBackupRecoveryPointArn
 * @property 'full'|'all-paused'|null $AutomationMode
 * @property int|null $ResumeFullAutomationModeMinutes
 * @property string|null $NetworkType
 * @property int|null $StorageThroughput
 * @property bool|null $ManageMasterUserPassword
 * @property bool|null $RotateMasterUserPassword
 * @property string|null $MasterUserSecretKmsKeyId
 * @property string|null $Engine
 * @property bool|null $DedicatedLogVolume
 * @property bool|null $MultiTenant
 */
class ModifyDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     AllocatedStorage?: int|null,
     *     DBInstanceClass?: string|null,
     *     DBSubnetGroupName?: string|null,
     *     DBSecurityGroups?: list<string>|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     ApplyImmediately?: bool|null,
     *     MasterUserPassword?: string|null,
     *     DBParameterGroupName?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     AllowMajorVersionUpgrade?: bool|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     LicenseModel?: string|null,
     *     Iops?: int|null,
     *     OptionGroupName?: string|null,
     *     NewDBInstanceIdentifier?: string|null,
     *     StorageType?: string|null,
     *     TdeCredentialArn?: string|null,
     *     TdeCredentialPassword?: string|null,
     *     CACertificateIdentifier?: string|null,
     *     Domain?: string|null,
     *     DomainFqdn?: string|null,
     *     DomainOu?: string|null,
     *     DomainAuthSecretArn?: string|null,
     *     DomainDnsIps?: list<string>|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     MonitoringInterval?: int|null,
     *     DBPortNumber?: int|null,
     *     PubliclyAccessible?: bool|null,
     *     MonitoringRoleArn?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     DisableDomain?: bool|null,
     *     PromotionTier?: int|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     DatabaseInsightsMode?: 'standard'|'advanced'|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     CloudwatchLogsExportConfiguration?: Shapes\CloudwatchLogsExportConfiguration|null,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>|null,
     *     UseDefaultProcessorFeatures?: bool|null,
     *     DeletionProtection?: bool|null,
     *     MaxAllocatedStorage?: int|null,
     *     CertificateRotationRestart?: bool|null,
     *     ReplicaMode?: 'open-read-only'|'mounted'|null,
     *     EnableCustomerOwnedIp?: bool|null,
     *     AwsBackupRecoveryPointArn?: string|null,
     *     AutomationMode?: 'full'|'all-paused'|null,
     *     ResumeFullAutomationModeMinutes?: int|null,
     *     NetworkType?: string|null,
     *     StorageThroughput?: int|null,
     *     ManageMasterUserPassword?: bool|null,
     *     RotateMasterUserPassword?: bool|null,
     *     MasterUserSecretKmsKeyId?: string|null,
     *     Engine?: string|null,
     *     DedicatedLogVolume?: bool|null,
     *     MultiTenant?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
