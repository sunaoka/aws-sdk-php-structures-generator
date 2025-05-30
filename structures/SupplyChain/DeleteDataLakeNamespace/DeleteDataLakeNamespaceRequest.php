<?php

namespace Sunaoka\Aws\Structures\SupplyChain\DeleteDataLakeNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $name
 */
class DeleteDataLakeNamespaceRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
