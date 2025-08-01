<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECIPIENT'|null $Attribute
 * @property IngressAnalysis|null $Analysis
 */
class IngressStringToEvaluate extends Shape
{
    /**
     * @param array{
     *     Attribute?: 'RECIPIENT'|null,
     *     Analysis?: IngressAnalysis|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
