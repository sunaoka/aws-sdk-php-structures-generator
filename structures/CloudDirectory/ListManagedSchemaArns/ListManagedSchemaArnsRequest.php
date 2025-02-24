<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListManagedSchemaArns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SchemaArn
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class ListManagedSchemaArnsRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
