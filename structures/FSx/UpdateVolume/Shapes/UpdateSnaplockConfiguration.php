<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AuditLogVolume
 * @property AutocommitPeriod|null $AutocommitPeriod
 * @property 'DISABLED'|'ENABLED'|'PERMANENTLY_DISABLED'|null $PrivilegedDelete
 * @property SnaplockRetentionPeriod|null $RetentionPeriod
 * @property bool|null $VolumeAppendModeEnabled
 */
class UpdateSnaplockConfiguration extends Shape
{
    /**
     * @param array{
     *     AuditLogVolume?: bool|null,
     *     AutocommitPeriod?: AutocommitPeriod|null,
     *     PrivilegedDelete?: 'DISABLED'|'ENABLED'|'PERMANENTLY_DISABLED'|null,
     *     RetentionPeriod?: SnaplockRetentionPeriod|null,
     *     VolumeAppendModeEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
