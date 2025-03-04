<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string|null $SourceDBClusterIdentifier
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property bool|null $DeletionProtection
 * @property string|null $DatabaseName
 * @property bool|null $StorageEncrypted
 */
class CreateGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier: string,
     *     SourceDBClusterIdentifier?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     DeletionProtection?: bool|null,
     *     DatabaseName?: string|null,
     *     StorageEncrypted?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
