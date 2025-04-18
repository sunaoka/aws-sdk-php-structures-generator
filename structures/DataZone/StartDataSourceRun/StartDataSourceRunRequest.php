<?php

namespace Sunaoka\Aws\Structures\DataZone\StartDataSourceRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $dataSourceIdentifier
 * @property string $domainIdentifier
 */
class StartDataSourceRunRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     dataSourceIdentifier: string,
     *     domainIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
