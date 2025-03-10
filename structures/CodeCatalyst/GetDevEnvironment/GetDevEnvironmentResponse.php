<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetDevEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property string $creatorId
 * @property 'PENDING'|'RUNNING'|'STARTING'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED' $status
 * @property string|null $statusReason
 * @property list<Shapes\DevEnvironmentRepositorySummary> $repositories
 * @property string|null $alias
 * @property list<Shapes\Ide>|null $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge' $instanceType
 * @property int<0, 1200> $inactivityTimeoutMinutes
 * @property Shapes\PersistentStorage $persistentStorage
 * @property string|null $vpcConnectionName
 */
class GetDevEnvironmentResponse extends Response
{
}
