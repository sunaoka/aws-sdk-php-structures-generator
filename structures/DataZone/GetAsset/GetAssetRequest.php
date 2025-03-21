<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $revision
 */
class GetAssetRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
