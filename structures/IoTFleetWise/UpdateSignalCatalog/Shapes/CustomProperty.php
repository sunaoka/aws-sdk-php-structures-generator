<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateSignalCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fullyQualifiedName
 * @property 'INT8'|'UINT8'|'INT16'|'UINT16'|'INT32'|'UINT32'|'INT64'|'UINT64'|'BOOLEAN'|'FLOAT'|'DOUBLE'|'STRING'|'UNIX_TIMESTAMP'|'INT8_ARRAY'|'UINT8_ARRAY'|'INT16_ARRAY'|'UINT16_ARRAY'|'INT32_ARRAY'|'UINT32_ARRAY'|'INT64_ARRAY'|'UINT64_ARRAY'|'BOOLEAN_ARRAY'|'FLOAT_ARRAY'|'DOUBLE_ARRAY'|'STRING_ARRAY'|'UNIX_TIMESTAMP_ARRAY'|'UNKNOWN'|'STRUCT'|'STRUCT_ARRAY' $dataType
 * @property 'BINARY'|'TYPED'|null $dataEncoding
 * @property string|null $description
 * @property string|null $deprecationMessage
 * @property string|null $comment
 * @property string|null $structFullyQualifiedName
 */
class CustomProperty extends Shape
{
    /**
     * @param array{
     *     fullyQualifiedName: string,
     *     dataType: 'INT8'|'UINT8'|'INT16'|'UINT16'|'INT32'|'UINT32'|'INT64'|'UINT64'|'BOOLEAN'|'FLOAT'|'DOUBLE'|'STRING'|'UNIX_TIMESTAMP'|'INT8_ARRAY'|'UINT8_ARRAY'|'INT16_ARRAY'|'UINT16_ARRAY'|'INT32_ARRAY'|'UINT32_ARRAY'|'INT64_ARRAY'|'UINT64_ARRAY'|'BOOLEAN_ARRAY'|'FLOAT_ARRAY'|'DOUBLE_ARRAY'|'STRING_ARRAY'|'UNIX_TIMESTAMP_ARRAY'|'UNKNOWN'|'STRUCT'|'STRUCT_ARRAY',
     *     dataEncoding?: 'BINARY'|'TYPED'|null,
     *     description?: string|null,
     *     deprecationMessage?: string|null,
     *     comment?: string|null,
     *     structFullyQualifiedName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
