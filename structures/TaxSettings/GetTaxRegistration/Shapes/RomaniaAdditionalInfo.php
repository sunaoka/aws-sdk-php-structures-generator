<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TaxRegistrationNumber'|'LocalRegistrationNumber' $taxRegistrationNumberType
 */
class RomaniaAdditionalInfo extends Shape
{
    /**
     * @param array{taxRegistrationNumberType: 'TaxRegistrationNumber'|'LocalRegistrationNumber'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
