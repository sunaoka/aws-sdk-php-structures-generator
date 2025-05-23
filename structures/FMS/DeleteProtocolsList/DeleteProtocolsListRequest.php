<?php

namespace Sunaoka\Aws\Structures\FMS\DeleteProtocolsList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListId
 */
class DeleteProtocolsListRequest extends Request
{
    /**
     * @param array{ListId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
