<?php

namespace Sunaoka\Aws\Structures\Proton\GetTemplateSyncStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $event
 * @property string|null $externalId
 * @property \Aws\Api\DateTimeResult $time
 * @property string $type
 */
class ResourceSyncEvent extends Shape
{
    /**
     * @param array{
     *     event: string,
     *     externalId?: string|null,
     *     time: \Aws\Api\DateTimeResult,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
