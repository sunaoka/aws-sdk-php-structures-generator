<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateEventAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Action|null $Action
 * @property string $EventActionId
 */
class UpdateEventActionRequest extends Request
{
    /**
     * @param array{
     *     Action?: Shapes\Action|null,
     *     EventActionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
