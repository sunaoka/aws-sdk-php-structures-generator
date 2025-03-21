<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $name
 * @property string $owningProjectIdentifier
 * @property 'DISABLED'|'ENABLED'|null $status
 */
class CreateGlossaryRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     name: string,
     *     owningProjectIdentifier: string,
     *     status?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
