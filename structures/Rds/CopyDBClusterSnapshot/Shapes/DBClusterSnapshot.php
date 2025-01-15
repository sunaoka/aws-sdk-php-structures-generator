<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AvailabilityZones
 * @property string|null $DBClusterSnapshotIdentifier
 * @property string|null $DBClusterIdentifier
 * @property \Aws\Api\DateTimeResult|null $SnapshotCreateTime
 * @property string|null $Engine
 * @property string|null $EngineMode
 * @property int|null $AllocatedStorage
 * @property string|null $Status
 * @property int|null $Port
 * @property string|null $VpcId
 * @property \Aws\Api\DateTimeResult|null $ClusterCreateTime
 * @property string|null $MasterUsername
 * @property string|null $EngineVersion
 * @property string|null $LicenseModel
 * @property string|null $SnapshotType
 * @property int|null $PercentProgress
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $DBClusterSnapshotArn
 * @property string|null $SourceDBClusterSnapshotArn
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property list<Tag>|null $TagList
 * @property string|null $DBSystemId
 * @property string|null $StorageType
 * @property string|null $DbClusterResourceId
 * @property int|null $StorageThroughput
 */
class DBClusterSnapshot extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     DBClusterSnapshotIdentifier?: string|null,
     *     DBClusterIdentifier?: string|null,
     *     SnapshotCreateTime?: \Aws\Api\DateTimeResult|null,
     *     Engine?: string|null,
     *     EngineMode?: string|null,
     *     AllocatedStorage?: int|null,
     *     Status?: string|null,
     *     Port?: int|null,
     *     VpcId?: string|null,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult|null,
     *     MasterUsername?: string|null,
     *     EngineVersion?: string|null,
     *     LicenseModel?: string|null,
     *     SnapshotType?: string|null,
     *     PercentProgress?: int|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     DBClusterSnapshotArn?: string|null,
     *     SourceDBClusterSnapshotArn?: string|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     TagList?: list<Tag>|null,
     *     DBSystemId?: string|null,
     *     StorageType?: string|null,
     *     DbClusterResourceId?: string|null,
     *     StorageThroughput?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
