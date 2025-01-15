<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $functionName
 * @property array<string, string>|null $functionTags
 * @property list<string>|null $layers
 * @property 'NODEJS'|'NODEJS_12_X'|'NODEJS_14_X'|'NODEJS_16_X'|'JAVA_8'|'JAVA_8_AL2'|'JAVA_11'|'PYTHON_3_7'|'PYTHON_3_8'|'PYTHON_3_9'|'UNSUPPORTED'|'NODEJS_18_X'|'GO_1_X'|'JAVA_17'|'PYTHON_3_10'|'PYTHON_3_11'|'DOTNETCORE_3_1'|'DOTNET_6'|'DOTNET_7'|'RUBY_2_7'|'RUBY_3_2'|null $runtime
 */
class LambdaFunctionMetadata extends Shape
{
    /**
     * @param array{
     *     functionName?: string|null,
     *     functionTags?: array<string, string>|null,
     *     layers?: list<string>|null,
     *     runtime?: 'NODEJS'|'NODEJS_12_X'|'NODEJS_14_X'|'NODEJS_16_X'|'JAVA_8'|'JAVA_8_AL2'|'JAVA_11'|'PYTHON_3_7'|'PYTHON_3_8'|'PYTHON_3_9'|'UNSUPPORTED'|'NODEJS_18_X'|'GO_1_X'|'JAVA_17'|'PYTHON_3_10'|'PYTHON_3_11'|'DOTNETCORE_3_1'|'DOTNET_6'|'DOTNET_7'|'RUBY_2_7'|'RUBY_3_2'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
