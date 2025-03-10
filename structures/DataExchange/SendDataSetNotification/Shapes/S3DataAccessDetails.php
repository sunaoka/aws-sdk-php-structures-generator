<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $KeyPrefixes
 * @property list<string>|null $Keys
 */
class S3DataAccessDetails extends Shape
{
    /**
     * @param array{
     *     KeyPrefixes?: list<string>|null,
     *     Keys?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
