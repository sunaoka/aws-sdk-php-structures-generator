<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListCloudWatchAlarmTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold' $ComparisonOperator
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property int<1, max>|null $DatapointsToAlarm
 * @property string|null $Description
 * @property int<1, max> $EvaluationPeriods
 * @property string $GroupId
 * @property string $Id
 * @property string $MetricName
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property string $Name
 * @property int<10, 86400> $Period
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum' $Statistic
 * @property array<string, string>|null $Tags
 * @property 'CLOUDFRONT_DISTRIBUTION'|'MEDIALIVE_MULTIPLEX'|'MEDIALIVE_CHANNEL'|'MEDIALIVE_INPUT_DEVICE'|'MEDIAPACKAGE_CHANNEL'|'MEDIAPACKAGE_ORIGIN_ENDPOINT'|'MEDIACONNECT_FLOW'|'S3_BUCKET' $TargetResourceType
 * @property double $Threshold
 * @property 'notBreaching'|'breaching'|'ignore'|'missing' $TreatMissingData
 */
class CloudWatchAlarmTemplateSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     ComparisonOperator: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     DatapointsToAlarm?: int<1, max>|null,
     *     Description?: string|null,
     *     EvaluationPeriods: int<1, max>,
     *     GroupId: string,
     *     Id: string,
     *     MetricName: string,
     *     ModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     Name: string,
     *     Period: int<10, 86400>,
     *     Statistic: 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum',
     *     Tags?: array<string, string>|null,
     *     TargetResourceType: 'CLOUDFRONT_DISTRIBUTION'|'MEDIALIVE_MULTIPLEX'|'MEDIALIVE_CHANNEL'|'MEDIALIVE_INPUT_DEVICE'|'MEDIAPACKAGE_CHANNEL'|'MEDIAPACKAGE_ORIGIN_ENDPOINT'|'MEDIACONNECT_FLOW'|'S3_BUCKET',
     *     Threshold: double,
     *     TreatMissingData: 'notBreaching'|'breaching'|'ignore'|'missing'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
