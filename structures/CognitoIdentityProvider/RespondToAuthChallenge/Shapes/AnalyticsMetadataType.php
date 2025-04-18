<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\RespondToAuthChallenge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AnalyticsEndpointId
 */
class AnalyticsMetadataType extends Shape
{
    /**
     * @param array{AnalyticsEndpointId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
