<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdatePool;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PoolArn
 * @property string|null $PoolId
 * @property 'CREATING'|'ACTIVE'|'DELETING'|null $Status
 * @property 'TRANSACTIONAL'|'PROMOTIONAL'|null $MessageType
 * @property bool|null $TwoWayEnabled
 * @property string|null $TwoWayChannelArn
 * @property string|null $TwoWayChannelRole
 * @property bool|null $SelfManagedOptOutsEnabled
 * @property string|null $OptOutListName
 * @property bool|null $SharedRoutesEnabled
 * @property bool|null $DeletionProtectionEnabled
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 */
class UpdatePoolResponse extends Response
{
}
