<?php

namespace Sunaoka\Aws\Structures\Lambda\AddLayerVersionPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LayerName
 * @property int $VersionNumber
 * @property string $StatementId
 * @property string $Action
 * @property string $Principal
 * @property string|null $OrganizationId
 * @property string|null $RevisionId
 */
class AddLayerVersionPermissionRequest extends Request
{
    /**
     * @param array{
     *     LayerName: string,
     *     VersionNumber: int,
     *     StatementId: string,
     *     Action: string,
     *     Principal: string,
     *     OrganizationId?: string|null,
     *     RevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
