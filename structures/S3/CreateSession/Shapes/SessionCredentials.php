<?php

namespace Sunaoka\Aws\Structures\S3\CreateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessKeyId
 * @property string $SecretAccessKey
 * @property string $SessionToken
 * @property \Aws\Api\DateTimeResult $Expiration
 */
class SessionCredentials extends Shape
{
    /**
     * @param array{
     *     AccessKeyId: string,
     *     SecretAccessKey: string,
     *     SessionToken: string,
     *     Expiration: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
