<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListingRevision|null $listing
 */
class GrantedEntity extends Shape
{
    /**
     * @param array{listing?: ListingRevision|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
