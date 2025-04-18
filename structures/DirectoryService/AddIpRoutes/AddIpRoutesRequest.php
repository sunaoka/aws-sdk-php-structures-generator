<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AddIpRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<Shapes\IpRoute> $IpRoutes
 * @property bool|null $UpdateSecurityGroupForDirectoryControllers
 */
class AddIpRoutesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     IpRoutes: list<Shapes\IpRoute>,
     *     UpdateSecurityGroupForDirectoryControllers?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
