<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP'|'ENCODE_SILENCE'|null $AbsentInputAudioBehavior
 * @property 'DISABLED'|'ENABLED'|null $Arib
 * @property string|null $AribCaptionsPid
 * @property 'AUTO'|'USE_CONFIGURED'|null $AribCaptionsPidControl
 * @property 'ATSC'|'DVB'|null $AudioBufferModel
 * @property int<0, max>|null $AudioFramesPerPes
 * @property string|null $AudioPids
 * @property 'ATSC'|'DVB'|null $AudioStreamType
 * @property int<0, max>|null $Bitrate
 * @property 'MULTIPLEX'|'NONE'|null $BufferModel
 * @property 'DISABLED'|'ENABLED'|null $CcDescriptor
 * @property DvbNitSettings|null $DvbNitSettings
 * @property DvbSdtSettings|null $DvbSdtSettings
 * @property string|null $DvbSubPids
 * @property DvbTdtSettings|null $DvbTdtSettings
 * @property string|null $DvbTeletextPid
 * @property 'NONE'|'PASSTHROUGH'|null $Ebif
 * @property 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL'|null $EbpAudioInterval
 * @property int<0, 10000>|null $EbpLookaheadMs
 * @property 'VIDEO_AND_AUDIO_PIDS'|'VIDEO_PID'|null $EbpPlacement
 * @property string|null $EcmPid
 * @property 'EXCLUDE'|'INCLUDE'|null $EsRateInPes
 * @property string|null $EtvPlatformPid
 * @property string|null $EtvSignalPid
 * @property double|null $FragmentTime
 * @property 'NONE'|'PASSTHROUGH'|null $Klv
 * @property string|null $KlvDataPids
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $NielsenId3Behavior
 * @property double|null $NullPacketBitrate
 * @property int<0, 1000>|null $PatInterval
 * @property 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET'|null $PcrControl
 * @property int<0, 500>|null $PcrPeriod
 * @property string|null $PcrPid
 * @property int<0, 1000>|null $PmtInterval
 * @property string|null $PmtPid
 * @property int<0, 65535>|null $ProgramNum
 * @property 'CBR'|'VBR'|null $RateMode
 * @property string|null $Scte27Pids
 * @property 'NONE'|'PASSTHROUGH'|null $Scte35Control
 * @property string|null $Scte35Pid
 * @property double|null $Scte35PrerollPullupMilliseconds
 * @property 'EBP'|'EBP_LEGACY'|'NONE'|'PSI_SEGSTART'|'RAI_ADAPT'|'RAI_SEGSTART'|null $SegmentationMarkers
 * @property 'MAINTAIN_CADENCE'|'RESET_CADENCE'|null $SegmentationStyle
 * @property double|null $SegmentationTime
 * @property 'NO_PASSTHROUGH'|'PASSTHROUGH'|null $TimedMetadataBehavior
 * @property string|null $TimedMetadataPid
 * @property int<0, 65535>|null $TransportStreamId
 * @property string|null $VideoPid
 */
class M2tsSettings extends Shape
{
    /**
     * @param array{
     *     AbsentInputAudioBehavior?: 'DROP'|'ENCODE_SILENCE'|null,
     *     Arib?: 'DISABLED'|'ENABLED'|null,
     *     AribCaptionsPid?: string|null,
     *     AribCaptionsPidControl?: 'AUTO'|'USE_CONFIGURED'|null,
     *     AudioBufferModel?: 'ATSC'|'DVB'|null,
     *     AudioFramesPerPes?: int<0, max>|null,
     *     AudioPids?: string|null,
     *     AudioStreamType?: 'ATSC'|'DVB'|null,
     *     Bitrate?: int<0, max>|null,
     *     BufferModel?: 'MULTIPLEX'|'NONE'|null,
     *     CcDescriptor?: 'DISABLED'|'ENABLED'|null,
     *     DvbNitSettings?: DvbNitSettings|null,
     *     DvbSdtSettings?: DvbSdtSettings|null,
     *     DvbSubPids?: string|null,
     *     DvbTdtSettings?: DvbTdtSettings|null,
     *     DvbTeletextPid?: string|null,
     *     Ebif?: 'NONE'|'PASSTHROUGH'|null,
     *     EbpAudioInterval?: 'VIDEO_AND_FIXED_INTERVALS'|'VIDEO_INTERVAL'|null,
     *     EbpLookaheadMs?: int<0, 10000>|null,
     *     EbpPlacement?: 'VIDEO_AND_AUDIO_PIDS'|'VIDEO_PID'|null,
     *     EcmPid?: string|null,
     *     EsRateInPes?: 'EXCLUDE'|'INCLUDE'|null,
     *     EtvPlatformPid?: string|null,
     *     EtvSignalPid?: string|null,
     *     FragmentTime?: double|null,
     *     Klv?: 'NONE'|'PASSTHROUGH'|null,
     *     KlvDataPids?: string|null,
     *     NielsenId3Behavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     NullPacketBitrate?: double|null,
     *     PatInterval?: int<0, 1000>|null,
     *     PcrControl?: 'CONFIGURED_PCR_PERIOD'|'PCR_EVERY_PES_PACKET'|null,
     *     PcrPeriod?: int<0, 500>|null,
     *     PcrPid?: string|null,
     *     PmtInterval?: int<0, 1000>|null,
     *     PmtPid?: string|null,
     *     ProgramNum?: int<0, 65535>|null,
     *     RateMode?: 'CBR'|'VBR'|null,
     *     Scte27Pids?: string|null,
     *     Scte35Control?: 'NONE'|'PASSTHROUGH'|null,
     *     Scte35Pid?: string|null,
     *     Scte35PrerollPullupMilliseconds?: double|null,
     *     SegmentationMarkers?: 'EBP'|'EBP_LEGACY'|'NONE'|'PSI_SEGSTART'|'RAI_ADAPT'|'RAI_SEGSTART'|null,
     *     SegmentationStyle?: 'MAINTAIN_CADENCE'|'RESET_CADENCE'|null,
     *     SegmentationTime?: double|null,
     *     TimedMetadataBehavior?: 'NO_PASSTHROUGH'|'PASSTHROUGH'|null,
     *     TimedMetadataPid?: string|null,
     *     TransportStreamId?: int<0, 65535>|null,
     *     VideoPid?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
