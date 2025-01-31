<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteKnowledgeBaseDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $dataSourceId
 * @property list<Shapes\DocumentIdentifier> $documentIdentifiers
 * @property string $knowledgeBaseId
 */
class DeleteKnowledgeBaseDocumentsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     dataSourceId: string,
     *     documentIdentifiers: list<Shapes\DocumentIdentifier>,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
