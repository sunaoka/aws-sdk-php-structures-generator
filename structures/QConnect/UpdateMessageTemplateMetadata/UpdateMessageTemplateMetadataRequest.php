<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\GroupingConfiguration|null $groupingConfiguration
 */
class UpdateMessageTemplateMetadataRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     groupingConfiguration?: Shapes\GroupingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
