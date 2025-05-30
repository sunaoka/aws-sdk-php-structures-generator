<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\DeleteIncidentRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteIncidentRecordRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
