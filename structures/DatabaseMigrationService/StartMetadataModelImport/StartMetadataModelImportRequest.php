<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $SelectionRules
 * @property 'SOURCE'|'TARGET' $Origin
 * @property bool|null $Refresh
 */
class StartMetadataModelImportRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     SelectionRules: string,
     *     Origin: 'SOURCE'|'TARGET',
     *     Refresh?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
