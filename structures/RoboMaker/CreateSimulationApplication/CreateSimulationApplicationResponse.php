<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $version
 * @property list<Shapes\Source>|null $sources
 * @property Shapes\SimulationSoftwareSuite|null $simulationSoftwareSuite
 * @property Shapes\RobotSoftwareSuite|null $robotSoftwareSuite
 * @property Shapes\RenderingEngine|null $renderingEngine
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $revisionId
 * @property array<string, string>|null $tags
 * @property Shapes\Environment|null $environment
 */
class CreateSimulationApplicationResponse extends Response
{
}
