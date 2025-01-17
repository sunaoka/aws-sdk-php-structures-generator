<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $frameworkId
 * @property string $name
 * @property string|null $description
 * @property string|null $complianceType
 * @property list<Shapes\UpdateAssessmentFrameworkControlSet> $controlSets
 */
class UpdateAssessmentFrameworkRequest extends Request
{
    /**
     * @param array{
     *     frameworkId: string,
     *     name: string,
     *     description?: string|null,
     *     complianceType?: string|null,
     *     controlSets: list<Shapes\UpdateAssessmentFrameworkControlSet>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
