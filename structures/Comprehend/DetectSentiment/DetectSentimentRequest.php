<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectSentiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW' $LanguageCode
 */
class DetectSentimentRequest extends Request
{
    /**
     * @param array{
     *     Text: string,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'|'ar'|'hi'|'ja'|'ko'|'zh'|'zh-TW'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
