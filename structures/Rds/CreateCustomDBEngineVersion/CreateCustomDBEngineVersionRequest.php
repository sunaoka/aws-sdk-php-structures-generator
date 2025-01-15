<?php

namespace Sunaoka\Aws\Structures\Rds\CreateCustomDBEngineVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string|null $DatabaseInstallationFilesS3BucketName
 * @property string|null $DatabaseInstallationFilesS3Prefix
 * @property string|null $ImageId
 * @property string|null $KMSKeyId
 * @property string|null $Description
 * @property string|null $Manifest
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $SourceCustomDbEngineVersionIdentifier
 * @property bool|null $UseAwsProvidedLatestImage
 */
class CreateCustomDBEngineVersionRequest extends Request
{
    /**
     * @param array{
     *     Engine: string,
     *     EngineVersion: string,
     *     DatabaseInstallationFilesS3BucketName?: string|null,
     *     DatabaseInstallationFilesS3Prefix?: string|null,
     *     ImageId?: string|null,
     *     KMSKeyId?: string|null,
     *     Description?: string|null,
     *     Manifest?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SourceCustomDbEngineVersionIdentifier?: string|null,
     *     UseAwsProvidedLatestImage?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
