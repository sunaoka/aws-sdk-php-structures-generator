<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $databaseUser
 * @property 'IAM'|'USERNAME_PASSWORD'|'USERNAME' $type
 * @property string|null $usernamePasswordSecretArn
 */
class RedshiftProvisionedAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     databaseUser?: string|null,
     *     type: 'IAM'|'USERNAME_PASSWORD'|'USERNAME',
     *     usernamePasswordSecretArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
