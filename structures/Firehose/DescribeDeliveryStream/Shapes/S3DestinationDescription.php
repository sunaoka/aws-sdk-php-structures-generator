<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $BucketARN
 * @property string|null $Prefix
 * @property string|null $ErrorOutputPrefix
 * @property BufferingHints $BufferingHints
 * @property 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY' $CompressionFormat
 * @property EncryptionConfiguration $EncryptionConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 */
class S3DestinationDescription extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     BucketARN: string,
     *     Prefix?: string|null,
     *     ErrorOutputPrefix?: string|null,
     *     BufferingHints: BufferingHints,
     *     CompressionFormat: 'UNCOMPRESSED'|'GZIP'|'ZIP'|'Snappy'|'HADOOP_SNAPPY',
     *     EncryptionConfiguration: EncryptionConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
