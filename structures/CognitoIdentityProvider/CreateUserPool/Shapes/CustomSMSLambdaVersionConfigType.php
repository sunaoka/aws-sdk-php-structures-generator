<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'V1_0' $LambdaVersion
 * @property string $LambdaArn
 */
class CustomSMSLambdaVersionConfigType extends Shape
{
    /**
     * @param array{
     *     LambdaVersion: 'V1_0',
     *     LambdaArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
