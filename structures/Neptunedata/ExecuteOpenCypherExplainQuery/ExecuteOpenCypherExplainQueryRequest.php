<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteOpenCypherExplainQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $openCypherQuery
 * @property string|null $parameters
 * @property 'static'|'dynamic'|'details' $explainMode
 */
class ExecuteOpenCypherExplainQueryRequest extends Request
{
    /**
     * @param array{
     *     openCypherQuery: string,
     *     parameters?: string|null,
     *     explainMode: 'static'|'dynamic'|'details'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
