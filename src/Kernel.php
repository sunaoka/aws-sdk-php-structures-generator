<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator;

use Sunaoka\Aws\Structures\Generator\Commands\GeneratorCommand;
use Symfony\Component\Console\Application;

class Kernel
{
    public const string APP_NAME = 'aws-sdk-php-structures-generator';

    public const string VERSION = '1.0.0';

    private Application $application;

    public function __construct()
    {
        $this->createApplication();
    }

    /**
     * @throws \Exception
     */
    public function run(): void
    {
        $this->application->run();
    }

    private function createApplication(): void
    {
        $this->application = new Application(self::APP_NAME, self::VERSION);
        $this->application->addCommands([
            new GeneratorCommand(),
        ]);
    }
}
