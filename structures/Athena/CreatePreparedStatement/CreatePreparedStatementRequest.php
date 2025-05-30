<?php

namespace Sunaoka\Aws\Structures\Athena\CreatePreparedStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StatementName
 * @property string $WorkGroup
 * @property string $QueryStatement
 * @property string|null $Description
 */
class CreatePreparedStatementRequest extends Request
{
    /**
     * @param array{
     *     StatementName: string,
     *     WorkGroup: string,
     *     QueryStatement: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
