<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateTransitVirtualInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property Shapes\NewTransitVirtualInterface $newTransitVirtualInterface
 */
class CreateTransitVirtualInterfaceRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     newTransitVirtualInterface: Shapes\NewTransitVirtualInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
