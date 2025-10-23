<?php

namespace Sunaoka\Aws\Structures\Lambda\ListLayers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LayerVersionArn
 * @property int|null $Version
 * @property string|null $Description
 * @property string|null $CreatedDate
 * @property list<'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'|'nodejs24.x'>|null $CompatibleRuntimes
 * @property string|null $LicenseInfo
 * @property list<'x86_64'|'arm64'>|null $CompatibleArchitectures
 */
class LayerVersionsListItem extends Shape
{
    /**
     * @param array{
     *     LayerVersionArn?: string|null,
     *     Version?: int|null,
     *     Description?: string|null,
     *     CreatedDate?: string|null,
     *     CompatibleRuntimes?: list<'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'|'nodejs24.x'>|null,
     *     LicenseInfo?: string|null,
     *     CompatibleArchitectures?: list<'x86_64'|'arm64'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
