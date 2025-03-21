<?php

namespace Sunaoka\Aws\Structures\ECRPublic\BatchCheckLayerAvailability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property list<string> $layerDigests
 */
class BatchCheckLayerAvailabilityRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     layerDigests: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
