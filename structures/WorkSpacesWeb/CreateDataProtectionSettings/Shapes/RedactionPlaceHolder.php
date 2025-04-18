<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $redactionPlaceHolderText
 * @property 'CustomText' $redactionPlaceHolderType
 */
class RedactionPlaceHolder extends Shape
{
    /**
     * @param array{
     *     redactionPlaceHolderText?: string|null,
     *     redactionPlaceHolderType: 'CustomText'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
