<?php

namespace Sunaoka\Aws\Structures\Route53\CreateVPCAssociationAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'eu-central-2'|'ap-east-1'|'me-south-1'|'us-gov-west-1'|'us-gov-east-1'|'us-iso-east-1'|'us-iso-west-1'|'us-isob-east-1'|'me-central-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-south-1'|'ap-south-2'|'ap-northeast-1'|'ap-northeast-2'|'ap-northeast-3'|'eu-north-1'|'sa-east-1'|'ca-central-1'|'cn-north-1'|'cn-northwest-1'|'af-south-1'|'eu-south-1'|'eu-south-2'|'ap-southeast-4'|'il-central-1'|'ca-west-1'|'ap-southeast-5'|'mx-central-1'|'us-isof-south-1'|'us-isof-east-1'|'ap-southeast-7'|'ap-east-2'|'eu-isoe-west-1'|null $VPCRegion
 * @property string|null $VPCId
 */
class VPC extends Shape
{
    /**
     * @param array{
     *     VPCRegion?: 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'eu-central-2'|'ap-east-1'|'me-south-1'|'us-gov-west-1'|'us-gov-east-1'|'us-iso-east-1'|'us-iso-west-1'|'us-isob-east-1'|'me-central-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-southeast-3'|'ap-south-1'|'ap-south-2'|'ap-northeast-1'|'ap-northeast-2'|'ap-northeast-3'|'eu-north-1'|'sa-east-1'|'ca-central-1'|'cn-north-1'|'cn-northwest-1'|'af-south-1'|'eu-south-1'|'eu-south-2'|'ap-southeast-4'|'il-central-1'|'ca-west-1'|'ap-southeast-5'|'mx-central-1'|'us-isof-south-1'|'us-isof-east-1'|'ap-southeast-7'|'ap-east-2'|'eu-isoe-west-1'|null,
     *     VPCId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
