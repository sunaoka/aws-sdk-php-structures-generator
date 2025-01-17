<?php

namespace Sunaoka\Aws\Structures\Iam\CreateSAMLProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLMetadataDocument
 * @property string $Name
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSAMLProviderRequest extends Request
{
    /**
     * @param array{
     *     SAMLMetadataDocument: string,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
