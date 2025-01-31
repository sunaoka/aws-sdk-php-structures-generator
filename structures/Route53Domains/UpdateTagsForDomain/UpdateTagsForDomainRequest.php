<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateTagsForDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<Shapes\Tag>|null $TagsToUpdate
 */
class UpdateTagsForDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     TagsToUpdate?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
