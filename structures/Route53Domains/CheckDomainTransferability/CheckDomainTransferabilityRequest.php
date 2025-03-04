<?php

namespace Sunaoka\Aws\Structures\Route53Domains\CheckDomainTransferability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $AuthCode
 */
class CheckDomainTransferabilityRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AuthCode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
