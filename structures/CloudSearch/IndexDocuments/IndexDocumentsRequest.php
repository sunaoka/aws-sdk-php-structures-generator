<?php

namespace Sunaoka\Aws\Structures\CloudSearch\IndexDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class IndexDocumentsRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
