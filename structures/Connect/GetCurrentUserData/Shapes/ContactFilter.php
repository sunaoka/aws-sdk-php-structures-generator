<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'INCOMING'|'PENDING'|'CONNECTING'|'CONNECTED'|'CONNECTED_ONHOLD'|'MISSED'|'ERROR'|'ENDED'|'REJECTED'>|null $ContactStates
 */
class ContactFilter extends Shape
{
    /**
     * @param array{ContactStates?: list<'INCOMING'|'PENDING'|'CONNECTING'|'CONNECTED'|'CONNECTED_ONHOLD'|'MISSED'|'ERROR'|'ENDED'|'REJECTED'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
