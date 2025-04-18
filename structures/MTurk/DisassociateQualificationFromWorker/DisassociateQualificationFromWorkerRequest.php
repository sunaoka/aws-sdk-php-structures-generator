<?php

namespace Sunaoka\Aws\Structures\MTurk\DisassociateQualificationFromWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkerId
 * @property string $QualificationTypeId
 * @property string|null $Reason
 */
class DisassociateQualificationFromWorkerRequest extends Request
{
    /**
     * @param array{
     *     WorkerId: string,
     *     QualificationTypeId: string,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
