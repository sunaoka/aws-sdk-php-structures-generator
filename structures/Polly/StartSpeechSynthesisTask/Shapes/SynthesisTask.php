<?php

namespace Sunaoka\Aws\Structures\Polly\StartSpeechSynthesisTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'standard'|'neural'|'long-form'|'generative'|null $Engine
 * @property string|null $TaskId
 * @property 'scheduled'|'inProgress'|'completed'|'failed'|null $TaskStatus
 * @property string|null $TaskStatusReason
 * @property string|null $OutputUri
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property int|null $RequestCharacters
 * @property string|null $SnsTopicArn
 * @property list<string>|null $LexiconNames
 * @property 'json'|'mp3'|'ogg_vorbis'|'pcm'|null $OutputFormat
 * @property string|null $SampleRate
 * @property list<'sentence'|'ssml'|'viseme'|'word'>|null $SpeechMarkTypes
 * @property 'ssml'|'text'|null $TextType
 * @property 'Aditi'|'Amy'|'Astrid'|'Bianca'|'Brian'|'Camila'|'Carla'|'Carmen'|'Celine'|'Chantal'|'Conchita'|'Cristiano'|'Dora'|'Emma'|'Enrique'|'Ewa'|'Filiz'|'Gabrielle'|'Geraint'|'Giorgio'|'Gwyneth'|'Hans'|'Ines'|'Ivy'|'Jacek'|'Jan'|'Joanna'|'Joey'|'Justin'|'Karl'|'Kendra'|'Kevin'|'Kimberly'|'Lea'|'Liv'|'Lotte'|'Lucia'|'Lupe'|'Mads'|'Maja'|'Marlene'|'Mathieu'|'Matthew'|'Maxim'|'Mia'|'Miguel'|'Mizuki'|'Naja'|'Nicole'|'Olivia'|'Penelope'|'Raveena'|'Ricardo'|'Ruben'|'Russell'|'Salli'|'Seoyeon'|'Takumi'|'Tatyana'|'Vicki'|'Vitoria'|'Zeina'|'Zhiyu'|'Aria'|'Ayanda'|'Arlet'|'Hannah'|'Arthur'|'Daniel'|'Liam'|'Pedro'|'Kajal'|'Hiujin'|'Laura'|'Elin'|'Ida'|'Suvi'|'Ola'|'Hala'|'Andres'|'Sergio'|'Remi'|'Adriano'|'Thiago'|'Ruth'|'Stephen'|'Kazuha'|'Tomoko'|'Niamh'|'Sofie'|'Lisa'|'Isabelle'|'Zayd'|'Danielle'|'Gregory'|'Burcu'|'Jitka'|'Sabrina'|'Jasmine'|'Jihye'|null $VoiceId
 * @property 'arb'|'cmn-CN'|'cy-GB'|'da-DK'|'de-DE'|'en-AU'|'en-GB'|'en-GB-WLS'|'en-IN'|'en-US'|'es-ES'|'es-MX'|'es-US'|'fr-CA'|'fr-FR'|'is-IS'|'it-IT'|'ja-JP'|'hi-IN'|'ko-KR'|'nb-NO'|'nl-NL'|'pl-PL'|'pt-BR'|'pt-PT'|'ro-RO'|'ru-RU'|'sv-SE'|'tr-TR'|'en-NZ'|'en-ZA'|'ca-ES'|'de-AT'|'yue-CN'|'ar-AE'|'fi-FI'|'en-IE'|'nl-BE'|'fr-BE'|'cs-CZ'|'de-CH'|'en-SG'|null $LanguageCode
 */
class SynthesisTask extends Shape
{
    /**
     * @param array{
     *     Engine?: 'standard'|'neural'|'long-form'|'generative'|null,
     *     TaskId?: string|null,
     *     TaskStatus?: 'scheduled'|'inProgress'|'completed'|'failed'|null,
     *     TaskStatusReason?: string|null,
     *     OutputUri?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     RequestCharacters?: int|null,
     *     SnsTopicArn?: string|null,
     *     LexiconNames?: list<string>|null,
     *     OutputFormat?: 'json'|'mp3'|'ogg_vorbis'|'pcm'|null,
     *     SampleRate?: string|null,
     *     SpeechMarkTypes?: list<'sentence'|'ssml'|'viseme'|'word'>|null,
     *     TextType?: 'ssml'|'text'|null,
     *     VoiceId?: 'Aditi'|'Amy'|'Astrid'|'Bianca'|'Brian'|'Camila'|'Carla'|'Carmen'|'Celine'|'Chantal'|'Conchita'|'Cristiano'|'Dora'|'Emma'|'Enrique'|'Ewa'|'Filiz'|'Gabrielle'|'Geraint'|'Giorgio'|'Gwyneth'|'Hans'|'Ines'|'Ivy'|'Jacek'|'Jan'|'Joanna'|'Joey'|'Justin'|'Karl'|'Kendra'|'Kevin'|'Kimberly'|'Lea'|'Liv'|'Lotte'|'Lucia'|'Lupe'|'Mads'|'Maja'|'Marlene'|'Mathieu'|'Matthew'|'Maxim'|'Mia'|'Miguel'|'Mizuki'|'Naja'|'Nicole'|'Olivia'|'Penelope'|'Raveena'|'Ricardo'|'Ruben'|'Russell'|'Salli'|'Seoyeon'|'Takumi'|'Tatyana'|'Vicki'|'Vitoria'|'Zeina'|'Zhiyu'|'Aria'|'Ayanda'|'Arlet'|'Hannah'|'Arthur'|'Daniel'|'Liam'|'Pedro'|'Kajal'|'Hiujin'|'Laura'|'Elin'|'Ida'|'Suvi'|'Ola'|'Hala'|'Andres'|'Sergio'|'Remi'|'Adriano'|'Thiago'|'Ruth'|'Stephen'|'Kazuha'|'Tomoko'|'Niamh'|'Sofie'|'Lisa'|'Isabelle'|'Zayd'|'Danielle'|'Gregory'|'Burcu'|'Jitka'|'Sabrina'|'Jasmine'|'Jihye'|null,
     *     LanguageCode?: 'arb'|'cmn-CN'|'cy-GB'|'da-DK'|'de-DE'|'en-AU'|'en-GB'|'en-GB-WLS'|'en-IN'|'en-US'|'es-ES'|'es-MX'|'es-US'|'fr-CA'|'fr-FR'|'is-IS'|'it-IT'|'ja-JP'|'hi-IN'|'ko-KR'|'nb-NO'|'nl-NL'|'pl-PL'|'pt-BR'|'pt-PT'|'ro-RO'|'ru-RU'|'sv-SE'|'tr-TR'|'en-NZ'|'en-ZA'|'ca-ES'|'de-AT'|'yue-CN'|'ar-AE'|'fi-FI'|'en-IE'|'nl-BE'|'fr-BE'|'cs-CZ'|'de-CH'|'en-SG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
