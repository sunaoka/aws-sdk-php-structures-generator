<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHENTICATED_READ'|'BUCKET_OWNER_FULL_CONTROL'|'BUCKET_OWNER_READ'|'PUBLIC_READ'|null $CannedAcl
 */
class HlsS3Settings extends Shape
{
    /**
     * @param array{CannedAcl?: 'AUTHENTICATED_READ'|'BUCKET_OWNER_FULL_CONTROL'|'BUCKET_OWNER_READ'|'PUBLIC_READ'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
