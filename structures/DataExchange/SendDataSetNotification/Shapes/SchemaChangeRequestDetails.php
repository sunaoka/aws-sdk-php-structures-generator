<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SchemaChangeDetails>|null $Changes
 * @property \Aws\Api\DateTimeResult $SchemaChangeAt
 */
class SchemaChangeRequestDetails extends Shape
{
    /**
     * @param array{
     *     Changes?: list<SchemaChangeDetails>|null,
     *     SchemaChangeAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
