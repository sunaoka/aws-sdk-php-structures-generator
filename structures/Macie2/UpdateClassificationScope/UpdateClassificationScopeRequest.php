<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateClassificationScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\S3ClassificationScopeUpdate|null $s3
 */
class UpdateClassificationScopeRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     s3?: Shapes\S3ClassificationScopeUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
