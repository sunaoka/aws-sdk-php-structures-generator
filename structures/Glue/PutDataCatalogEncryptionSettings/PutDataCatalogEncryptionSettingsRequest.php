<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogEncryptionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property Shapes\DataCatalogEncryptionSettings $DataCatalogEncryptionSettings
 */
class PutDataCatalogEncryptionSettingsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DataCatalogEncryptionSettings: Shapes\DataCatalogEncryptionSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
