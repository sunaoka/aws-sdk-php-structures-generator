<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property Shapes\DefaultAction $DefaultAction
 * @property string|null $Description
 * @property list<Shapes\Rule>|null $Rules
 * @property Shapes\VisibilityConfig $VisibilityConfig
 * @property Shapes\DataProtectionConfig|null $DataProtectionConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property array<string, Shapes\CustomResponseBody>|null $CustomResponseBodies
 * @property Shapes\CaptchaConfig|null $CaptchaConfig
 * @property Shapes\ChallengeConfig|null $ChallengeConfig
 * @property list<string>|null $TokenDomains
 * @property Shapes\AssociationConfig|null $AssociationConfig
 * @property Shapes\OnSourceDDoSProtectionConfig|null $OnSourceDDoSProtectionConfig
 * @property Shapes\ApplicationConfig|null $ApplicationConfig
 */
class CreateWebACLRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     DefaultAction: Shapes\DefaultAction,
     *     Description?: string|null,
     *     Rules?: list<Shapes\Rule>|null,
     *     VisibilityConfig: Shapes\VisibilityConfig,
     *     DataProtectionConfig?: Shapes\DataProtectionConfig|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     CustomResponseBodies?: array<string, Shapes\CustomResponseBody>|null,
     *     CaptchaConfig?: Shapes\CaptchaConfig|null,
     *     ChallengeConfig?: Shapes\ChallengeConfig|null,
     *     TokenDomains?: list<string>|null,
     *     AssociationConfig?: Shapes\AssociationConfig|null,
     *     OnSourceDDoSProtectionConfig?: Shapes\OnSourceDDoSProtectionConfig|null,
     *     ApplicationConfig?: Shapes\ApplicationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
