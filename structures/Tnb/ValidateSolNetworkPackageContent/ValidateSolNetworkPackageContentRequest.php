<?php

namespace Sunaoka\Aws\Structures\Tnb\ValidateSolNetworkPackageContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'application/zip'|null $contentType
 * @property string|resource|\Psr\Http\Message\StreamInterface $file
 * @property string $nsdInfoId
 */
class ValidateSolNetworkPackageContentRequest extends Request
{
    /**
     * @param array{
     *     contentType?: 'application/zip'|null,
     *     file: string|resource|\Psr\Http\Message\StreamInterface,
     *     nsdInfoId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
