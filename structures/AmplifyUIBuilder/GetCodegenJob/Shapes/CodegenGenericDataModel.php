<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, CodegenGenericDataField> $fields
 * @property bool|null $isJoinTable
 * @property list<string> $primaryKeys
 */
class CodegenGenericDataModel extends Shape
{
    /**
     * @param array{
     *     fields: array<string, CodegenGenericDataField>,
     *     isJoinTable?: bool|null,
     *     primaryKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
