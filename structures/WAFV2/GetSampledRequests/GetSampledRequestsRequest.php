<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetSampledRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAclArn
 * @property string $RuleMetricName
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property Shapes\TimeWindow $TimeWindow
 * @property int<1, 500> $MaxItems
 */
class GetSampledRequestsRequest extends Request
{
    /**
     * @param array{
     *     WebAclArn: string,
     *     RuleMetricName: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     TimeWindow: Shapes\TimeWindow,
     *     MaxItems: int<1, 500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
