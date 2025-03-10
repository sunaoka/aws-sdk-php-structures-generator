<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistrationDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DestinationS3Location|null $destinationS3Location
 * @property Shapes\TaxDocumentMetadata $taxDocumentMetadata
 */
class GetTaxRegistrationDocumentRequest extends Request
{
    /**
     * @param array{
     *     destinationS3Location?: Shapes\DestinationS3Location|null,
     *     taxDocumentMetadata: Shapes\TaxDocumentMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
