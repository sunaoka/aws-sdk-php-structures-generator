<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $testSuiteId
 * @property string $name
 * @property Shapes\TestSuiteLatestVersion $latestVersion
 * @property int $testSuiteVersion
 * @property 'Creating'|'Updating'|'Active'|'Failed'|'Deleting'|null $status
 * @property string|null $statusReason
 * @property string $testSuiteArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property string|null $description
 * @property list<Shapes\Step> $beforeSteps
 * @property list<Shapes\Step> $afterSteps
 * @property Shapes\TestCases $testCases
 * @property array<string, string>|null $tags
 */
class GetTestSuiteResponse extends Response
{
}
