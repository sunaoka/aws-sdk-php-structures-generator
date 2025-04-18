<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateDeployment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $AutoDeployed
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $DeploymentId
 * @property 'PENDING'|'FAILED'|'DEPLOYED'|null $DeploymentStatus
 * @property string|null $DeploymentStatusMessage
 * @property string|null $Description
 */
class CreateDeploymentResponse extends Response
{
}
