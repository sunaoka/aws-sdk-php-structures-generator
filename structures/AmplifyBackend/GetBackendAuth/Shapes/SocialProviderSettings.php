<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BackendAuthSocialProviderConfig|null $Facebook
 * @property BackendAuthSocialProviderConfig|null $Google
 * @property BackendAuthSocialProviderConfig|null $LoginWithAmazon
 * @property BackendAuthAppleProviderConfig|null $SignInWithApple
 */
class SocialProviderSettings extends Shape
{
    /**
     * @param array{
     *     Facebook?: BackendAuthSocialProviderConfig|null,
     *     Google?: BackendAuthSocialProviderConfig|null,
     *     LoginWithAmazon?: BackendAuthSocialProviderConfig|null,
     *     SignInWithApple?: BackendAuthAppleProviderConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
