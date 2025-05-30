<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'DOMAIN_UNIT'|'ENVIRONMENT_BLUEPRINT_CONFIGURATION'|'ENVIRONMENT_PROFILE'|'ASSET_TYPE' $entityType
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property 'CREATE_DOMAIN_UNIT'|'OVERRIDE_DOMAIN_UNIT_OWNERS'|'ADD_TO_PROJECT_MEMBER_POOL'|'OVERRIDE_PROJECT_OWNERS'|'CREATE_GLOSSARY'|'CREATE_FORM_TYPE'|'CREATE_ASSET_TYPE'|'CREATE_PROJECT'|'CREATE_ENVIRONMENT_PROFILE'|'DELEGATE_CREATE_ENVIRONMENT_PROFILE'|'CREATE_ENVIRONMENT'|'CREATE_ENVIRONMENT_FROM_BLUEPRINT'|'CREATE_PROJECT_FROM_PROJECT_PROFILE'|'USE_ASSET_TYPE' $policyType
 */
class ListPolicyGrantsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'DOMAIN_UNIT'|'ENVIRONMENT_BLUEPRINT_CONFIGURATION'|'ENVIRONMENT_PROFILE'|'ASSET_TYPE',
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     policyType: 'CREATE_DOMAIN_UNIT'|'OVERRIDE_DOMAIN_UNIT_OWNERS'|'ADD_TO_PROJECT_MEMBER_POOL'|'OVERRIDE_PROJECT_OWNERS'|'CREATE_GLOSSARY'|'CREATE_FORM_TYPE'|'CREATE_ASSET_TYPE'|'CREATE_PROJECT'|'CREATE_ENVIRONMENT_PROFILE'|'DELEGATE_CREATE_ENVIRONMENT_PROFILE'|'CREATE_ENVIRONMENT'|'CREATE_ENVIRONMENT_FROM_BLUEPRINT'|'CREATE_PROJECT_FROM_PROJECT_PROFILE'|'USE_ASSET_TYPE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
