<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TranslationPinDataIsoFormat034|null $IsoFormat0
 * @property TranslationPinDataIsoFormat1|null $IsoFormat1
 * @property TranslationPinDataIsoFormat034|null $IsoFormat3
 * @property TranslationPinDataIsoFormat034|null $IsoFormat4
 */
class TranslationIsoFormats extends Shape
{
    /**
     * @param array{
     *     IsoFormat0?: TranslationPinDataIsoFormat034|null,
     *     IsoFormat1?: TranslationPinDataIsoFormat1|null,
     *     IsoFormat3?: TranslationPinDataIsoFormat034|null,
     *     IsoFormat4?: TranslationPinDataIsoFormat034|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
