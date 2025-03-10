<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $dataSourceId
 * @property list<Shapes\KnowledgeBaseDocument> $documents
 * @property string $knowledgeBaseId
 */
class IngestKnowledgeBaseDocumentsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     dataSourceId: string,
     *     documents: list<Shapes\KnowledgeBaseDocument>,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
