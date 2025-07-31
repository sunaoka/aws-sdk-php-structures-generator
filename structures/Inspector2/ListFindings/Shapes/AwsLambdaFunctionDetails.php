<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionName
 * @property 'NODEJS'|'NODEJS_12_X'|'NODEJS_14_X'|'NODEJS_16_X'|'JAVA_8'|'JAVA_8_AL2'|'JAVA_11'|'PYTHON_3_7'|'PYTHON_3_8'|'PYTHON_3_9'|'UNSUPPORTED'|'NODEJS_18_X'|'GO_1_X'|'JAVA_17'|'PYTHON_3_10'|'PYTHON_3_11'|'DOTNETCORE_3_1'|'DOTNET_6'|'DOTNET_7'|'RUBY_2_7'|'RUBY_3_2' $runtime
 * @property string $codeSha256
 * @property string $version
 * @property string $executionRoleArn
 * @property list<string>|null $layers
 * @property LambdaVpcConfig|null $vpcConfig
 * @property 'IMAGE'|'ZIP'|null $packageType
 * @property list<'X86_64'|'ARM64'>|null $architectures
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 */
class AwsLambdaFunctionDetails extends Shape
{
    /**
     * @param array{
     *     functionName: string,
     *     runtime: 'NODEJS'|'NODEJS_12_X'|'NODEJS_14_X'|'NODEJS_16_X'|'JAVA_8'|'JAVA_8_AL2'|'JAVA_11'|'PYTHON_3_7'|'PYTHON_3_8'|'PYTHON_3_9'|'UNSUPPORTED'|'NODEJS_18_X'|'GO_1_X'|'JAVA_17'|'PYTHON_3_10'|'PYTHON_3_11'|'DOTNETCORE_3_1'|'DOTNET_6'|'DOTNET_7'|'RUBY_2_7'|'RUBY_3_2',
     *     codeSha256: string,
     *     version: string,
     *     executionRoleArn: string,
     *     layers?: list<string>|null,
     *     vpcConfig?: LambdaVpcConfig|null,
     *     packageType?: 'IMAGE'|'ZIP'|null,
     *     architectures?: list<'X86_64'|'ARM64'>|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
