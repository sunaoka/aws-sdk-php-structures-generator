<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Email
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property string|null $BusinessTitle
 * @property string|null $Phone
 */
class SenderContact extends Shape
{
    /**
     * @param array{
     *     Email: string,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     BusinessTitle?: string|null,
     *     Phone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
