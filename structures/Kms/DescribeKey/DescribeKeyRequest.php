<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property list<string>|null $GrantTokens
 */
class DescribeKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     GrantTokens?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
