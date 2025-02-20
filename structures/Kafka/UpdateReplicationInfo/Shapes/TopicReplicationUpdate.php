<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateReplicationInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CopyAccessControlListsForTopics
 * @property bool $CopyTopicConfigurations
 * @property bool $DetectAndCopyNewTopics
 * @property list<string> $TopicsToExclude
 * @property list<string> $TopicsToReplicate
 */
class TopicReplicationUpdate extends Shape
{
    /**
     * @param array{
     *     CopyAccessControlListsForTopics: bool,
     *     CopyTopicConfigurations: bool,
     *     DetectAndCopyNewTopics: bool,
     *     TopicsToExclude: list<string>,
     *     TopicsToReplicate: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
