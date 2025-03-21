<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateEventBridgeRuleTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property list<Shapes\EventBridgeRuleTemplateTarget>|null $EventTargets
 * @property 'MEDIALIVE_MULTIPLEX_ALERT'|'MEDIALIVE_MULTIPLEX_STATE_CHANGE'|'MEDIALIVE_CHANNEL_ALERT'|'MEDIALIVE_CHANNEL_INPUT_CHANGE'|'MEDIALIVE_CHANNEL_STATE_CHANGE'|'MEDIAPACKAGE_INPUT_NOTIFICATION'|'MEDIAPACKAGE_KEY_PROVIDER_NOTIFICATION'|'MEDIAPACKAGE_HARVEST_JOB_NOTIFICATION'|'SIGNAL_MAP_ACTIVE_ALARM'|'MEDIACONNECT_ALERT'|'MEDIACONNECT_SOURCE_HEALTH'|'MEDIACONNECT_OUTPUT_HEALTH'|'MEDIACONNECT_FLOW_STATUS_CHANGE' $EventType
 * @property string $GroupIdentifier
 * @property string $Name
 * @property array<string, string>|null $Tags
 * @property string|null $RequestId
 */
class CreateEventBridgeRuleTemplateRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     EventTargets?: list<Shapes\EventBridgeRuleTemplateTarget>|null,
     *     EventType: 'MEDIALIVE_MULTIPLEX_ALERT'|'MEDIALIVE_MULTIPLEX_STATE_CHANGE'|'MEDIALIVE_CHANNEL_ALERT'|'MEDIALIVE_CHANNEL_INPUT_CHANGE'|'MEDIALIVE_CHANNEL_STATE_CHANGE'|'MEDIAPACKAGE_INPUT_NOTIFICATION'|'MEDIAPACKAGE_KEY_PROVIDER_NOTIFICATION'|'MEDIAPACKAGE_HARVEST_JOB_NOTIFICATION'|'SIGNAL_MAP_ACTIVE_ALARM'|'MEDIACONNECT_ALERT'|'MEDIACONNECT_SOURCE_HEALTH'|'MEDIACONNECT_OUTPUT_HEALTH'|'MEDIACONNECT_FLOW_STATUS_CHANGE',
     *     GroupIdentifier: string,
     *     Name: string,
     *     Tags?: array<string, string>|null,
     *     RequestId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
