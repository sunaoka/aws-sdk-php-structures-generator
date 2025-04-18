<?php

namespace Sunaoka\Aws\Structures\Waf\GetSqlInjectionMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SqlInjectionMatchSetId
 * @property string|null $Name
 * @property list<SqlInjectionMatchTuple> $SqlInjectionMatchTuples
 */
class SqlInjectionMatchSet extends Shape
{
    /**
     * @param array{
     *     SqlInjectionMatchSetId: string,
     *     Name?: string|null,
     *     SqlInjectionMatchTuples: list<SqlInjectionMatchTuple>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
