<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string|null $clientToken
 * @property Shapes\CreateComponentData $componentToCreate
 */
class CreateComponentRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     clientToken?: string|null,
     *     componentToCreate: Shapes\CreateComponentData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
