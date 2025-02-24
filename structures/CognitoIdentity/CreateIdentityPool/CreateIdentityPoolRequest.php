<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\CreateIdentityPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolName
 * @property bool $AllowUnauthenticatedIdentities
 * @property bool|null $AllowClassicFlow
 * @property array<string, string>|null $SupportedLoginProviders
 * @property string|null $DeveloperProviderName
 * @property list<string>|null $OpenIdConnectProviderARNs
 * @property list<Shapes\CognitoIdentityProvider>|null $CognitoIdentityProviders
 * @property list<string>|null $SamlProviderARNs
 * @property array<string, string>|null $IdentityPoolTags
 */
class CreateIdentityPoolRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolName: string,
     *     AllowUnauthenticatedIdentities: bool,
     *     AllowClassicFlow?: bool|null,
     *     SupportedLoginProviders?: array<string, string>|null,
     *     DeveloperProviderName?: string|null,
     *     OpenIdConnectProviderARNs?: list<string>|null,
     *     CognitoIdentityProviders?: list<Shapes\CognitoIdentityProvider>|null,
     *     SamlProviderARNs?: list<string>|null,
     *     IdentityPoolTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
