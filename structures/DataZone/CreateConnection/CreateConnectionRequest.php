<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsLocation|null $awsLocation
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $domainIdentifier
 * @property bool|null $enableTrustedIdentityPropagation
 * @property string|null $environmentIdentifier
 * @property string $name
 * @property Shapes\ConnectionPropertiesInput|null $props
 * @property 'DOMAIN'|'PROJECT'|null $scope
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     awsLocation?: Shapes\AwsLocation|null,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     enableTrustedIdentityPropagation?: bool|null,
     *     environmentIdentifier?: string|null,
     *     name: string,
     *     props?: Shapes\ConnectionPropertiesInput|null,
     *     scope?: 'DOMAIN'|'PROJECT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
