<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostPath
 * @property string|null $containerPath
 * @property list<'read'|'write'|'mknod'>|null $permissions
 */
class Device extends Shape
{
    /**
     * @param array{
     *     hostPath: string,
     *     containerPath?: string|null,
     *     permissions?: list<'read'|'write'|'mknod'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
