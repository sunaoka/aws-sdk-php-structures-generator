<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'REQUIRE_DIGIT'|'REQUIRE_LOWERCASE'|'REQUIRE_SYMBOL'|'REQUIRE_UPPERCASE'>|null $AdditionalConstraints
 * @property double $MinimumLength
 */
class CreateBackendAuthPasswordPolicyConfig extends Shape
{
    /**
     * @param array{
     *     AdditionalConstraints?: list<'REQUIRE_DIGIT'|'REQUIRE_LOWERCASE'|'REQUIRE_SYMBOL'|'REQUIRE_UPPERCASE'>|null,
     *     MinimumLength: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
