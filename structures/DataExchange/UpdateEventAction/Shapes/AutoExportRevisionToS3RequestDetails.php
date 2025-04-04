<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateEventAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportServerSideEncryption|null $Encryption
 * @property AutoExportRevisionDestinationEntry $RevisionDestination
 */
class AutoExportRevisionToS3RequestDetails extends Shape
{
    /**
     * @param array{
     *     Encryption?: ExportServerSideEncryption|null,
     *     RevisionDestination: AutoExportRevisionDestinationEntry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
