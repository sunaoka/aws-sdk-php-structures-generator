<?php

namespace Sunaoka\Aws\Structures\Account\GetAccountInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 */
class GetAccountInformationRequest extends Request
{
    /**
     * @param array{AccountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
