<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $eventTypeCodes
 * @property list<string>|null $awsAccountIds
 * @property list<string>|null $services
 * @property list<string>|null $regions
 * @property DateTimeRange|null $startTime
 * @property DateTimeRange|null $endTime
 * @property DateTimeRange|null $lastUpdatedTime
 * @property list<string>|null $entityArns
 * @property list<string>|null $entityValues
 * @property list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>|null $eventTypeCategories
 * @property list<'open'|'closed'|'upcoming'>|null $eventStatusCodes
 */
class OrganizationEventFilter extends Shape
{
    /**
     * @param array{
     *     eventTypeCodes?: list<string>|null,
     *     awsAccountIds?: list<string>|null,
     *     services?: list<string>|null,
     *     regions?: list<string>|null,
     *     startTime?: DateTimeRange|null,
     *     endTime?: DateTimeRange|null,
     *     lastUpdatedTime?: DateTimeRange|null,
     *     entityArns?: list<string>|null,
     *     entityValues?: list<string>|null,
     *     eventTypeCategories?: list<'issue'|'accountNotification'|'scheduledChange'|'investigation'>|null,
     *     eventStatusCodes?: list<'open'|'closed'|'upcoming'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
