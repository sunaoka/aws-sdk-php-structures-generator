<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginRequestPolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<string>|null $Items
 */
class CookieNames extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
