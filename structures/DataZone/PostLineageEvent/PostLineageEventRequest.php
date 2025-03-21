<?php

namespace Sunaoka\Aws\Structures\DataZone\PostLineageEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string|resource|\Psr\Http\Message\StreamInterface $event
 */
class PostLineageEventRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     event: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
