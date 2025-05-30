<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $configArn
 * @property Shapes\ConfigTypeData $configData
 * @property string $configId
 * @property 'antenna-downlink'|'antenna-downlink-demod-decode'|'tracking'|'dataflow-endpoint'|'antenna-uplink'|'uplink-echo'|'s3-recording'|null $configType
 * @property string $name
 * @property array<string, string>|null $tags
 */
class GetConfigResponse extends Response
{
}
