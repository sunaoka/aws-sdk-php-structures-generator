<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Namespace
 * @property string|null $Description
 * @property Shapes\ApplicationSourceConfig|null $ApplicationSourceConfig
 * @property list<Shapes\Subscription>|null $Subscriptions
 * @property list<Shapes\Publication>|null $Publications
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property array<string, string>|null $Tags
 * @property list<string>|null $Permissions
 * @property bool|null $IsService
 * @property int<1, 600000>|null $InitializationTimeout
 * @property Shapes\ApplicationConfig|null $ApplicationConfig
 * @property Shapes\IframeConfig|null $IframeConfig
 */
class GetApplicationResponse extends Response
{
}
