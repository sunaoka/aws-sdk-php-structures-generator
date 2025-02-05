<?php

namespace Sunaoka\Aws\Structures\RoboMaker\SyncDeploymentJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $fleet
 * @property 'Pending'|'Preparing'|'InProgress'|'Failed'|'Succeeded'|'Canceled'|null $status
 * @property Shapes\DeploymentConfig|null $deploymentConfig
 * @property list<Shapes\DeploymentApplicationConfig>|null $deploymentApplicationConfigs
 * @property string|null $failureReason
 * @property 'ResourceNotFound'|'EnvironmentSetupError'|'EtagMismatch'|'FailureThresholdBreached'|'RobotDeploymentAborted'|'RobotDeploymentNoResponse'|'RobotAgentConnectionTimeout'|'GreengrassDeploymentFailed'|'InvalidGreengrassGroup'|'MissingRobotArchitecture'|'MissingRobotApplicationArchitecture'|'MissingRobotDeploymentResource'|'GreengrassGroupVersionDoesNotExist'|'LambdaDeleted'|'ExtractingBundleFailure'|'PreLaunchFileFailure'|'PostLaunchFileFailure'|'BadPermissionError'|'DownloadConditionFailed'|'BadLambdaAssociated'|'InternalServerError'|'RobotApplicationDoesNotExist'|'DeploymentFleetDoesNotExist'|'FleetDeploymentTimeout'|null $failureCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class SyncDeploymentJobResponse extends Response
{
}
