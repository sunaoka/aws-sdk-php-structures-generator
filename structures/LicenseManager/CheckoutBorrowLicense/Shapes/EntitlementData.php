<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CheckoutBorrowLicense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Value
 * @property 'Count'|'None'|'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second' $Unit
 */
class EntitlementData extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Value?: string|null,
     *     Unit: 'Count'|'None'|'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
