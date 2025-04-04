<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMV_OPTION_A'|'EMV_OPTION_B' $MajorKeyDerivationMode
 * @property string $PrimaryAccountNumber
 * @property string $PanSequenceNumber
 * @property string $ApplicationTransactionCounter
 */
class Emv2000Attributes extends Shape
{
    /**
     * @param array{
     *     MajorKeyDerivationMode: 'EMV_OPTION_A'|'EMV_OPTION_B',
     *     PrimaryAccountNumber: string,
     *     PanSequenceNumber: string,
     *     ApplicationTransactionCounter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
