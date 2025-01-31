<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifySnapshotCopyRetentionPeriod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property int $RetentionPeriod
 * @property bool|null $Manual
 */
class ModifySnapshotCopyRetentionPeriodRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     RetentionPeriod: int,
     *     Manual?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
