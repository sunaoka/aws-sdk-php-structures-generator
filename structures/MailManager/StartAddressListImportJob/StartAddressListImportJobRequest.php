<?php

namespace Sunaoka\Aws\Structures\MailManager\StartAddressListImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StartAddressListImportJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
