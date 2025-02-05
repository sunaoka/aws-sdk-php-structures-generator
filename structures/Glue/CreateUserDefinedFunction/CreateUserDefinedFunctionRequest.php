<?php

namespace Sunaoka\Aws\Structures\Glue\CreateUserDefinedFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property Shapes\UserDefinedFunctionInput $FunctionInput
 */
class CreateUserDefinedFunctionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     FunctionInput: Shapes\UserDefinedFunctionInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
