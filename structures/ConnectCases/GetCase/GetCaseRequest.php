<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $domainId
 * @property list<Shapes\FieldIdentifier> $fields
 * @property string|null $nextToken
 */
class GetCaseRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     domainId: string,
     *     fields: list<Shapes\FieldIdentifier>,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
