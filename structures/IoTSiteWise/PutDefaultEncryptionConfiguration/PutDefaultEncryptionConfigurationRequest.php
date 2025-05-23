<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutDefaultEncryptionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SITEWISE_DEFAULT_ENCRYPTION'|'KMS_BASED_ENCRYPTION' $encryptionType
 * @property string|null $kmsKeyId
 */
class PutDefaultEncryptionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     encryptionType: 'SITEWISE_DEFAULT_ENCRYPTION'|'KMS_BASED_ENCRYPTION',
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
