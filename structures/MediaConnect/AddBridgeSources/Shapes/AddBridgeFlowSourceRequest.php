<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowArn
 * @property VpcInterfaceAttachment|null $FlowVpcInterfaceAttachment
 * @property string $Name
 */
class AddBridgeFlowSourceRequest extends Shape
{
    /**
     * @param array{
     *     FlowArn: string,
     *     FlowVpcInterfaceAttachment?: VpcInterfaceAttachment|null,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
