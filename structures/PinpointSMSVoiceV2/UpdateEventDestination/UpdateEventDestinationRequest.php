<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateEventDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property string $EventDestinationName
 * @property bool|null $Enabled
 * @property list<'ALL'|'TEXT_ALL'|'TEXT_SENT'|'TEXT_PENDING'|'TEXT_QUEUED'|'TEXT_SUCCESSFUL'|'TEXT_DELIVERED'|'TEXT_INVALID'|'TEXT_INVALID_MESSAGE'|'TEXT_UNREACHABLE'|'TEXT_CARRIER_UNREACHABLE'|'TEXT_BLOCKED'|'TEXT_CARRIER_BLOCKED'|'TEXT_SPAM'|'TEXT_UNKNOWN'|'TEXT_TTL_EXPIRED'|'TEXT_PROTECT_BLOCKED'|'VOICE_ALL'|'VOICE_INITIATED'|'VOICE_RINGING'|'VOICE_ANSWERED'|'VOICE_COMPLETED'|'VOICE_BUSY'|'VOICE_NO_ANSWER'|'VOICE_FAILED'|'VOICE_TTL_EXPIRED'|'MEDIA_ALL'|'MEDIA_PENDING'|'MEDIA_QUEUED'|'MEDIA_SUCCESSFUL'|'MEDIA_DELIVERED'|'MEDIA_INVALID'|'MEDIA_INVALID_MESSAGE'|'MEDIA_UNREACHABLE'|'MEDIA_CARRIER_UNREACHABLE'|'MEDIA_BLOCKED'|'MEDIA_CARRIER_BLOCKED'|'MEDIA_SPAM'|'MEDIA_UNKNOWN'|'MEDIA_TTL_EXPIRED'|'MEDIA_FILE_INACCESSIBLE'|'MEDIA_FILE_TYPE_UNSUPPORTED'|'MEDIA_FILE_SIZE_EXCEEDED'>|null $MatchingEventTypes
 * @property Shapes\CloudWatchLogsDestination|null $CloudWatchLogsDestination
 * @property Shapes\KinesisFirehoseDestination|null $KinesisFirehoseDestination
 * @property Shapes\SnsDestination|null $SnsDestination
 */
class UpdateEventDestinationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     EventDestinationName: string,
     *     Enabled?: bool|null,
     *     MatchingEventTypes?: list<'ALL'|'TEXT_ALL'|'TEXT_SENT'|'TEXT_PENDING'|'TEXT_QUEUED'|'TEXT_SUCCESSFUL'|'TEXT_DELIVERED'|'TEXT_INVALID'|'TEXT_INVALID_MESSAGE'|'TEXT_UNREACHABLE'|'TEXT_CARRIER_UNREACHABLE'|'TEXT_BLOCKED'|'TEXT_CARRIER_BLOCKED'|'TEXT_SPAM'|'TEXT_UNKNOWN'|'TEXT_TTL_EXPIRED'|'TEXT_PROTECT_BLOCKED'|'VOICE_ALL'|'VOICE_INITIATED'|'VOICE_RINGING'|'VOICE_ANSWERED'|'VOICE_COMPLETED'|'VOICE_BUSY'|'VOICE_NO_ANSWER'|'VOICE_FAILED'|'VOICE_TTL_EXPIRED'|'MEDIA_ALL'|'MEDIA_PENDING'|'MEDIA_QUEUED'|'MEDIA_SUCCESSFUL'|'MEDIA_DELIVERED'|'MEDIA_INVALID'|'MEDIA_INVALID_MESSAGE'|'MEDIA_UNREACHABLE'|'MEDIA_CARRIER_UNREACHABLE'|'MEDIA_BLOCKED'|'MEDIA_CARRIER_BLOCKED'|'MEDIA_SPAM'|'MEDIA_UNKNOWN'|'MEDIA_TTL_EXPIRED'|'MEDIA_FILE_INACCESSIBLE'|'MEDIA_FILE_TYPE_UNSUPPORTED'|'MEDIA_FILE_SIZE_EXCEEDED'>|null,
     *     CloudWatchLogsDestination?: Shapes\CloudWatchLogsDestination|null,
     *     KinesisFirehoseDestination?: Shapes\KinesisFirehoseDestination|null,
     *     SnsDestination?: Shapes\SnsDestination|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
