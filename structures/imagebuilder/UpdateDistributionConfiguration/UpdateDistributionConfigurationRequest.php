<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionConfigurationArn
 * @property string|null $description
 * @property list<Shapes\Distribution> $distributions
 * @property string $clientToken
 */
class UpdateDistributionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     distributionConfigurationArn: string,
     *     description?: string|null,
     *     distributions: list<Shapes\Distribution>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
