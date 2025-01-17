<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceSyncBlockerSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $serviceInstanceName
 * @property string $serviceName
 */
class GetServiceSyncBlockerSummaryRequest extends Request
{
    /**
     * @param array{
     *     serviceInstanceName?: string|null,
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
