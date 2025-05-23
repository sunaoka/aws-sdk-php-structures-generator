<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstanceSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceSnapshotName
 * @property string $instanceName
 * @property list<Shapes\Tag>|null $tags
 */
class CreateInstanceSnapshotRequest extends Request
{
    /**
     * @param array{
     *     instanceSnapshotName: string,
     *     instanceName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
