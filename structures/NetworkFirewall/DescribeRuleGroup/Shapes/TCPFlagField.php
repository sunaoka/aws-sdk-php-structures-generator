<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'FIN'|'SYN'|'RST'|'PSH'|'ACK'|'URG'|'ECE'|'CWR'> $Flags
 * @property list<'FIN'|'SYN'|'RST'|'PSH'|'ACK'|'URG'|'ECE'|'CWR'>|null $Masks
 */
class TCPFlagField extends Shape
{
    /**
     * @param array{
     *     Flags: list<'FIN'|'SYN'|'RST'|'PSH'|'ACK'|'URG'|'ECE'|'CWR'>,
     *     Masks?: list<'FIN'|'SYN'|'RST'|'PSH'|'ACK'|'URG'|'ECE'|'CWR'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
