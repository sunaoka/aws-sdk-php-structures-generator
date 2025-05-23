<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $bucketName
 * @property string $key
 * @property 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'log-delivery-write'|null $cannedAcl
 */
class S3Action extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     bucketName: string,
     *     key: string,
     *     cannedAcl?: 'private'|'public-read'|'public-read-write'|'aws-exec-read'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'log-delivery-write'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
