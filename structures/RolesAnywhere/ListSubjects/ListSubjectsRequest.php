<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListSubjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int|null $pageSize
 */
class ListSubjectsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     pageSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
