<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetDataIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $KmsKey
 * @property string|null $SourceURI
 * @property Shapes\ScheduleConfiguration|null $ScheduleConfiguration
 * @property array<string, string>|null $Tags
 * @property Shapes\FileConfiguration|null $FileConfiguration
 * @property array<string, array<string, list<string>>>|null $ObjectConfiguration
 */
class GetDataIntegrationResponse extends Response
{
}
