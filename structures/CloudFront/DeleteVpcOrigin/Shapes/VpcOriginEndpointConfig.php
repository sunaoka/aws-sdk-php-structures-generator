<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteVpcOrigin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property int $HTTPPort
 * @property int $HTTPSPort
 * @property 'http-only'|'match-viewer'|'https-only' $OriginProtocolPolicy
 * @property OriginSslProtocols|null $OriginSslProtocols
 */
class VpcOriginEndpointConfig extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     HTTPPort: int,
     *     HTTPSPort: int,
     *     OriginProtocolPolicy: 'http-only'|'match-viewer'|'https-only',
     *     OriginSslProtocols?: OriginSslProtocols|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
