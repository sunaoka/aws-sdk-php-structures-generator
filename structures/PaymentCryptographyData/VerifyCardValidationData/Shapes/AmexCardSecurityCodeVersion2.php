<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CardExpiryDate
 * @property string $ServiceCode
 */
class AmexCardSecurityCodeVersion2 extends Shape
{
    /**
     * @param array{
     *     CardExpiryDate: string,
     *     ServiceCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
