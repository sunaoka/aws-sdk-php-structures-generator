<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetCompositeModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $assetId
 * @property string $assetCompositeModelId
 * @property string|null $assetCompositeModelExternalId
 * @property list<Shapes\AssetCompositeModelPathSegment> $assetCompositeModelPath
 * @property string $assetCompositeModelName
 * @property string $assetCompositeModelDescription
 * @property string $assetCompositeModelType
 * @property list<Shapes\AssetProperty> $assetCompositeModelProperties
 * @property list<Shapes\AssetCompositeModelSummary> $assetCompositeModelSummaries
 * @property list<Shapes\ActionDefinition>|null $actionDefinitions
 */
class DescribeAssetCompositeModelResponse extends Response
{
}
