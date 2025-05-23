<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetModelId
 * @property string|null $assetModelExternalId
 * @property string $assetModelArn
 * @property string $assetModelName
 * @property 'ASSET_MODEL'|'COMPONENT_MODEL'|null $assetModelType
 * @property string $assetModelDescription
 * @property list<Shapes\AssetModelProperty> $assetModelProperties
 * @property list<Shapes\AssetModelHierarchy> $assetModelHierarchies
 * @property list<Shapes\AssetModelCompositeModel>|null $assetModelCompositeModels
 * @property list<Shapes\AssetModelCompositeModelSummary>|null $assetModelCompositeModelSummaries
 * @property \Aws\Api\DateTimeResult $assetModelCreationDate
 * @property \Aws\Api\DateTimeResult $assetModelLastUpdateDate
 * @property Shapes\AssetModelStatus $assetModelStatus
 * @property string|null $assetModelVersion
 * @property string|null $eTag
 */
class DescribeAssetModelResponse extends Response
{
}
