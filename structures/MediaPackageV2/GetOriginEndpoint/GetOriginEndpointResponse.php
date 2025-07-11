<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property 'TS'|'CMAF'|'ISM' $ContainerType
 * @property Shapes\Segment $Segment
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property \Aws\Api\DateTimeResult|null $ResetAt
 * @property string|null $Description
 * @property int|null $StartoverWindowSeconds
 * @property list<Shapes\GetHlsManifestConfiguration>|null $HlsManifests
 * @property list<Shapes\GetLowLatencyHlsManifestConfiguration>|null $LowLatencyHlsManifests
 * @property list<Shapes\GetDashManifestConfiguration>|null $DashManifests
 * @property list<Shapes\GetMssManifestConfiguration>|null $MssManifests
 * @property Shapes\ForceEndpointErrorConfiguration|null $ForceEndpointErrorConfiguration
 * @property string|null $ETag
 * @property array<string, string>|null $Tags
 */
class GetOriginEndpointResponse extends Response
{
}
