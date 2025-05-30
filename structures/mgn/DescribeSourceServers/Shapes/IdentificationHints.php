<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsInstanceID
 * @property string|null $fqdn
 * @property string|null $hostname
 * @property string|null $vmPath
 * @property string|null $vmWareUuid
 */
class IdentificationHints extends Shape
{
    /**
     * @param array{
     *     awsInstanceID?: string|null,
     *     fqdn?: string|null,
     *     hostname?: string|null,
     *     vmPath?: string|null,
     *     vmWareUuid?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
