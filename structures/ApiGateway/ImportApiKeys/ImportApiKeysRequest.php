<?php

namespace Sunaoka\Aws\Structures\ApiGateway\ImportApiKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $body
 * @property 'csv' $format
 * @property bool|null $failOnWarnings
 */
class ImportApiKeysRequest extends Request
{
    /**
     * @param array{
     *     body: string|resource|\Psr\Http\Message\StreamInterface,
     *     format: 'csv',
     *     failOnWarnings?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
