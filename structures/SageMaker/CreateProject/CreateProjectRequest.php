<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string|null $ProjectDescription
 * @property Shapes\ServiceCatalogProvisioningDetails|null $ServiceCatalogProvisioningDetails
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\CreateTemplateProvider>|null $TemplateProviders
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ProjectDescription?: string|null,
     *     ServiceCatalogProvisioningDetails?: Shapes\ServiceCatalogProvisioningDetails|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     TemplateProviders?: list<Shapes\CreateTemplateProvider>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
