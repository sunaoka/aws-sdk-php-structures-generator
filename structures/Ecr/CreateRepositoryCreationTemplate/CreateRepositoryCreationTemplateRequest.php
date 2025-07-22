<?php

namespace Sunaoka\Aws\Structures\Ecr\CreateRepositoryCreationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $prefix
 * @property string|null $description
 * @property Shapes\EncryptionConfigurationForRepositoryCreationTemplate|null $encryptionConfiguration
 * @property list<Shapes\Tag>|null $resourceTags
 * @property 'MUTABLE'|'IMMUTABLE'|'IMMUTABLE_WITH_EXCLUSION'|'MUTABLE_WITH_EXCLUSION'|null $imageTagMutability
 * @property list<Shapes\ImageTagMutabilityExclusionFilter>|null $imageTagMutabilityExclusionFilters
 * @property string|null $repositoryPolicy
 * @property string|null $lifecyclePolicy
 * @property list<'REPLICATION'|'PULL_THROUGH_CACHE'> $appliedFor
 * @property string|null $customRoleArn
 */
class CreateRepositoryCreationTemplateRequest extends Request
{
    /**
     * @param array{
     *     prefix: string,
     *     description?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfigurationForRepositoryCreationTemplate|null,
     *     resourceTags?: list<Shapes\Tag>|null,
     *     imageTagMutability?: 'MUTABLE'|'IMMUTABLE'|'IMMUTABLE_WITH_EXCLUSION'|'MUTABLE_WITH_EXCLUSION'|null,
     *     imageTagMutabilityExclusionFilters?: list<Shapes\ImageTagMutabilityExclusionFilter>|null,
     *     repositoryPolicy?: string|null,
     *     lifecyclePolicy?: string|null,
     *     appliedFor: list<'REPLICATION'|'PULL_THROUGH_CACHE'>,
     *     customRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
