<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerHostname
 * @property string $Image
 * @property string|null $ImageDigest
 * @property string|null $ModelDataUrl
 * @property ModelDataSource|null $ModelDataSource
 * @property string|null $ProductId
 * @property array<string, string>|null $Environment
 * @property ModelInput|null $ModelInput
 * @property string|null $Framework
 * @property string|null $FrameworkVersion
 * @property string|null $NearestModelName
 * @property AdditionalS3DataSource|null $AdditionalS3DataSource
 * @property string|null $ModelDataETag
 */
class ModelPackageContainerDefinition extends Shape
{
    /**
     * @param array{
     *     ContainerHostname?: string|null,
     *     Image: string,
     *     ImageDigest?: string|null,
     *     ModelDataUrl?: string|null,
     *     ModelDataSource?: ModelDataSource|null,
     *     ProductId?: string|null,
     *     Environment?: array<string, string>|null,
     *     ModelInput?: ModelInput|null,
     *     Framework?: string|null,
     *     FrameworkVersion?: string|null,
     *     NearestModelName?: string|null,
     *     AdditionalS3DataSource?: AdditionalS3DataSource|null,
     *     ModelDataETag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
