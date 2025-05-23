<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginAccessControlConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'sigv4' $SigningProtocol
 * @property 'never'|'always'|'no-override' $SigningBehavior
 * @property 's3'|'mediastore'|'mediapackagev2'|'lambda' $OriginAccessControlOriginType
 */
class OriginAccessControlConfig extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     SigningProtocol: 'sigv4',
     *     SigningBehavior: 'never'|'always'|'no-override',
     *     OriginAccessControlOriginType: 's3'|'mediastore'|'mediapackagev2'|'lambda'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
