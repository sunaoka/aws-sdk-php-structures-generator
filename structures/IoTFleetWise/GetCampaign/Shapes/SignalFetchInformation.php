<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fullyQualifiedName
 * @property SignalFetchConfig $signalFetchConfig
 * @property int<1, 1>|null $conditionLanguageVersion
 * @property list<string> $actions
 */
class SignalFetchInformation extends Shape
{
    /**
     * @param array{
     *     fullyQualifiedName: string,
     *     signalFetchConfig: SignalFetchConfig,
     *     conditionLanguageVersion?: int<1, 1>|null,
     *     actions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
