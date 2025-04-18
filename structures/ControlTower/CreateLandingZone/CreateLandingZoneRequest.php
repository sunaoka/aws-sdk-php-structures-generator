<?php

namespace Sunaoka\Aws\Structures\ControlTower\CreateLandingZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Manifest $manifest
 * @property array<string, string>|null $tags
 * @property string $version
 */
class CreateLandingZoneRequest extends Request
{
    /**
     * @param array{
     *     manifest: Shapes\Manifest,
     *     tags?: array<string, string>|null,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
