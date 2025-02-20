<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\CreateHost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged' $ProviderType
 * @property string $ProviderEndpoint
 * @property Shapes\VpcConfiguration|null $VpcConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateHostRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ProviderType: 'Bitbucket'|'GitHub'|'GitHubEnterpriseServer'|'GitLab'|'GitLabSelfManaged',
     *     ProviderEndpoint: string,
     *     VpcConfiguration?: Shapes\VpcConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
