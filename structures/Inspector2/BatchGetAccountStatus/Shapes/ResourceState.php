<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property State $ec2
 * @property State $ecr
 * @property State|null $lambda
 * @property State|null $lambdaCode
 * @property State|null $codeRepository
 */
class ResourceState extends Shape
{
    /**
     * @param array{
     *     ec2: State,
     *     ecr: State,
     *     lambda?: State|null,
     *     lambdaCode?: State|null,
     *     codeRepository?: State|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
