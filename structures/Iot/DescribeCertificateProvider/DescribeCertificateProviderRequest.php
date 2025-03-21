<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCertificateProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateProviderName
 */
class DescribeCertificateProviderRequest extends Request
{
    /**
     * @param array{certificateProviderName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
