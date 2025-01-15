<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceFromDBSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string|null $DBSnapshotIdentifier
 * @property string|null $DBInstanceClass
 * @property int|null $Port
 * @property string|null $AvailabilityZone
 * @property string|null $DBSubnetGroupName
 * @property bool|null $MultiAZ
 * @property bool|null $PubliclyAccessible
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $LicenseModel
 * @property string|null $DBName
 * @property string|null $Engine
 * @property int|null $Iops
 * @property string|null $OptionGroupName
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $StorageType
 * @property string|null $TdeCredentialArn
 * @property string|null $TdeCredentialPassword
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $Domain
 * @property string|null $DomainFqdn
 * @property string|null $DomainOu
 * @property string|null $DomainAuthSecretArn
 * @property list<string>|null $DomainDnsIps
 * @property bool|null $CopyTagsToSnapshot
 * @property string|null $DomainIAMRoleName
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property list<Shapes\ProcessorFeature>|null $ProcessorFeatures
 * @property bool|null $UseDefaultProcessorFeatures
 * @property string|null $DBParameterGroupName
 * @property bool|null $DeletionProtection
 * @property bool|null $EnableCustomerOwnedIp
 * @property string|null $CustomIamInstanceProfile
 * @property string|null $BackupTarget
 * @property string|null $NetworkType
 * @property int|null $StorageThroughput
 * @property string|null $DBClusterSnapshotIdentifier
 * @property int|null $AllocatedStorage
 * @property bool|null $DedicatedLogVolume
 * @property string|null $CACertificateIdentifier
 * @property string|null $EngineLifecycleSupport
 */
class RestoreDBInstanceFromDBSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     DBSnapshotIdentifier?: string|null,
     *     DBInstanceClass?: string|null,
     *     Port?: int|null,
     *     AvailabilityZone?: string|null,
     *     DBSubnetGroupName?: string|null,
     *     MultiAZ?: bool|null,
     *     PubliclyAccessible?: bool|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     LicenseModel?: string|null,
     *     DBName?: string|null,
     *     Engine?: string|null,
     *     Iops?: int|null,
     *     OptionGroupName?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     StorageType?: string|null,
     *     TdeCredentialArn?: string|null,
     *     TdeCredentialPassword?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     Domain?: string|null,
     *     DomainFqdn?: string|null,
     *     DomainOu?: string|null,
     *     DomainAuthSecretArn?: string|null,
     *     DomainDnsIps?: list<string>|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     DomainIAMRoleName?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>|null,
     *     UseDefaultProcessorFeatures?: bool|null,
     *     DBParameterGroupName?: string|null,
     *     DeletionProtection?: bool|null,
     *     EnableCustomerOwnedIp?: bool|null,
     *     CustomIamInstanceProfile?: string|null,
     *     BackupTarget?: string|null,
     *     NetworkType?: string|null,
     *     StorageThroughput?: int|null,
     *     DBClusterSnapshotIdentifier?: string|null,
     *     AllocatedStorage?: int|null,
     *     DedicatedLogVolume?: bool|null,
     *     CACertificateIdentifier?: string|null,
     *     EngineLifecycleSupport?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
