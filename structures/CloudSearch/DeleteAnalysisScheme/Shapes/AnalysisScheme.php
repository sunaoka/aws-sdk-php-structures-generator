<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteAnalysisScheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnalysisSchemeName
 * @property 'ar'|'bg'|'ca'|'cs'|'da'|'de'|'el'|'en'|'es'|'eu'|'fa'|'fi'|'fr'|'ga'|'gl'|'he'|'hi'|'hu'|'hy'|'id'|'it'|'ja'|'ko'|'lv'|'mul'|'nl'|'no'|'pt'|'ro'|'ru'|'sv'|'th'|'tr'|'zh-Hans'|'zh-Hant' $AnalysisSchemeLanguage
 * @property AnalysisOptions|null $AnalysisOptions
 */
class AnalysisScheme extends Shape
{
    /**
     * @param array{
     *     AnalysisSchemeName: string,
     *     AnalysisSchemeLanguage: 'ar'|'bg'|'ca'|'cs'|'da'|'de'|'el'|'en'|'es'|'eu'|'fa'|'fi'|'fr'|'ga'|'gl'|'he'|'hi'|'hu'|'hy'|'id'|'it'|'ja'|'ko'|'lv'|'mul'|'nl'|'no'|'pt'|'ro'|'ru'|'sv'|'th'|'tr'|'zh-Hans'|'zh-Hant',
     *     AnalysisOptions?: AnalysisOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
