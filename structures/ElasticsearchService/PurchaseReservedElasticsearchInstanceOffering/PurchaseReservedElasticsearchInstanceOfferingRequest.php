<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\PurchaseReservedElasticsearchInstanceOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedElasticsearchInstanceOfferingId
 * @property string $ReservationName
 * @property int<1, max>|null $InstanceCount
 */
class PurchaseReservedElasticsearchInstanceOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedElasticsearchInstanceOfferingId: string,
     *     ReservationName: string,
     *     InstanceCount?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
