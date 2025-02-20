<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateContainerAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string $containerInstance
 */
class UpdateContainerAgentRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     containerInstance: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
