<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1500, 192000>|null $Iops
 * @property 'AUTOMATIC'|'USER_PROVISIONED'|null $Mode
 */
class UpdateFileSystemLustreMetadataConfiguration extends Shape
{
    /**
     * @param array{
     *     Iops?: int<1500, 192000>|null,
     *     Mode?: 'AUTOMATIC'|'USER_PROVISIONED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
