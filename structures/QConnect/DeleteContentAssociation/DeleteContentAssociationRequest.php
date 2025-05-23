<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteContentAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $contentId
 * @property string $contentAssociationId
 */
class DeleteContentAssociationRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     contentId: string,
     *     contentAssociationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
