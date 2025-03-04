<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 16383> $Uarfcn
 * @property int<0, 127> $CellParams
 * @property int<0, 268435455>|null $UtranCid
 * @property int<-120, -25>|null $Rscp
 * @property int<46, 158>|null $PathLoss
 */
class TdscdmaNmrObj extends Shape
{
    /**
     * @param array{
     *     Uarfcn: int<0, 16383>,
     *     CellParams: int<0, 127>,
     *     UtranCid?: int<0, 268435455>|null,
     *     Rscp?: int<-120, -25>|null,
     *     PathLoss?: int<46, 158>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
