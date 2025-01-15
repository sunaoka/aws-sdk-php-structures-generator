<?php

namespace Sunaoka\Aws\Structures\Lambda\GetLayerVersionByArn;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\LayerVersionContentOutput|null $Content
 * @property string|null $LayerArn
 * @property string|null $LayerVersionArn
 * @property string|null $Description
 * @property string|null $CreatedDate
 * @property int|null $Version
 * @property list<'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'>|null $CompatibleRuntimes
 * @property string|null $LicenseInfo
 * @property list<'x86_64'|'arm64'>|null $CompatibleArchitectures
 */
class GetLayerVersionByArnResponse extends Response
{
}
