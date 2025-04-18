<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $limit
 * @property string $meshName
 * @property string|null $meshOwner
 * @property string|null $nextToken
 * @property string $virtualRouterName
 */
class ListRoutesRequest extends Request
{
    /**
     * @param array{
     *     limit?: int<1, 100>|null,
     *     meshName: string,
     *     meshOwner?: string|null,
     *     nextToken?: string|null,
     *     virtualRouterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
