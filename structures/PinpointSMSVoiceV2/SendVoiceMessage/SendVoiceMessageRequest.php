<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendVoiceMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPhoneNumber
 * @property string $OriginationIdentity
 * @property string|null $MessageBody
 * @property 'TEXT'|'SSML'|null $MessageBodyTextType
 * @property 'AMY'|'ASTRID'|'BIANCA'|'BRIAN'|'CAMILA'|'CARLA'|'CARMEN'|'CELINE'|'CHANTAL'|'CONCHITA'|'CRISTIANO'|'DORA'|'EMMA'|'ENRIQUE'|'EWA'|'FILIZ'|'GERAINT'|'GIORGIO'|'GWYNETH'|'HANS'|'INES'|'IVY'|'JACEK'|'JAN'|'JOANNA'|'JOEY'|'JUSTIN'|'KARL'|'KENDRA'|'KIMBERLY'|'LEA'|'LIV'|'LOTTE'|'LUCIA'|'LUPE'|'MADS'|'MAJA'|'MARLENE'|'MATHIEU'|'MATTHEW'|'MAXIM'|'MIA'|'MIGUEL'|'MIZUKI'|'NAJA'|'NICOLE'|'PENELOPE'|'RAVEENA'|'RICARDO'|'RUBEN'|'RUSSELL'|'SALLI'|'SEOYEON'|'TAKUMI'|'TATYANA'|'VICKI'|'VITORIA'|'ZEINA'|'ZHIYU'|null $VoiceId
 * @property string|null $ConfigurationSetName
 * @property string|null $MaxPricePerMinute
 * @property int<5, 259200>|null $TimeToLive
 * @property array<string, string>|null $Context
 * @property bool|null $DryRun
 * @property string|null $ProtectConfigurationId
 * @property bool|null $MessageFeedbackEnabled
 */
class SendVoiceMessageRequest extends Request
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     OriginationIdentity: string,
     *     MessageBody?: string|null,
     *     MessageBodyTextType?: 'TEXT'|'SSML'|null,
     *     VoiceId?: 'AMY'|'ASTRID'|'BIANCA'|'BRIAN'|'CAMILA'|'CARLA'|'CARMEN'|'CELINE'|'CHANTAL'|'CONCHITA'|'CRISTIANO'|'DORA'|'EMMA'|'ENRIQUE'|'EWA'|'FILIZ'|'GERAINT'|'GIORGIO'|'GWYNETH'|'HANS'|'INES'|'IVY'|'JACEK'|'JAN'|'JOANNA'|'JOEY'|'JUSTIN'|'KARL'|'KENDRA'|'KIMBERLY'|'LEA'|'LIV'|'LOTTE'|'LUCIA'|'LUPE'|'MADS'|'MAJA'|'MARLENE'|'MATHIEU'|'MATTHEW'|'MAXIM'|'MIA'|'MIGUEL'|'MIZUKI'|'NAJA'|'NICOLE'|'PENELOPE'|'RAVEENA'|'RICARDO'|'RUBEN'|'RUSSELL'|'SALLI'|'SEOYEON'|'TAKUMI'|'TATYANA'|'VICKI'|'VITORIA'|'ZEINA'|'ZHIYU'|null,
     *     ConfigurationSetName?: string|null,
     *     MaxPricePerMinute?: string|null,
     *     TimeToLive?: int<5, 259200>|null,
     *     Context?: array<string, string>|null,
     *     DryRun?: bool|null,
     *     ProtectConfigurationId?: string|null,
     *     MessageFeedbackEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
