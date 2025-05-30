<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamRoleArn
 * @property string $LogGroupArn
 */
class CloudWatchLogsDestination extends Shape
{
    /**
     * @param array{
     *     IamRoleArn: string,
     *     LogGroupArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
