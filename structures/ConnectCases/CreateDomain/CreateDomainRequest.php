<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
