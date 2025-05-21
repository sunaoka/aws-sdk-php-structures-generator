<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator\Commands;

use Composer\InstalledVersions;
use Sunaoka\Aws\Structures\Generator\Generator;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * @phpstan-type Manifest           array{namespace: string, versions: array<string, string>, serviceIdentifier: string}
 * @phpstan-type DataMetadata       array{apiVersion: string, serviceId: string}
 * @phpstan-type DataOperation      array{name: string, input?: array{shape: string}, output?: array{shape: string}, errors?: list<array{shape: string}>}
 * @phpstan-type DataShapeCommon    array{type: string, enum?: list<string>, min?: int, max?: int}
 * @phpstan-type DataShapeStructure array{type: 'structure', required?: list<string>, members: array<string, array{shape: string}>}
 * @phpstan-type DataShapeMap       array{type: 'map', key: array{shape: string}, value: array{shape: string}}
 * @phpstan-type DataShapeList      array{type: 'list', member: array{shape: string}}
 * @phpstan-type DataShape          DataShapeCommon|DataShapeStructure|DataShapeMap|DataShapeList
 * @phpstan-type Data               array{version: string, metadata: DataMetadata, operations: array<string, DataOperation>, shapes: array<string, DataShape>}
 */
#[AsCommand(name: 'app:generate', description: 'Generates AWS SDK Structures')]
class GeneratorCommand extends Command
{
    private string $namespacePrefix = 'Sunaoka\Aws\Structures';

    private string $outputDirectory;

    private string $modelsDirectory;

    protected function configure(): void
    {
        $this->addOption('output', 'o', InputOption::VALUE_REQUIRED, 'The output directory', base_path('structures'));
        $this->addOption('service', 's', InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'The service to generate', []);
        $this->addOption('no-progress', description: 'Do not show progress bar');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // @phpstan-ignore cast.string
        $this->outputDirectory = (string) $input->getOption('output');
        $this->modelsDirectory = $this->getModelsDirectory();
        $generatedServices = (array) $input->getOption('service');
        $noProgress = (bool) $input->getOption('no-progress');

        $manifest = $this->getManifest();

        if ($noProgress === false) {
            $io = new SymfonyStyle($input, $output);
            $io->progressStart(count($generatedServices) > 0 ? count($generatedServices) : count($manifest));
        }

        foreach ($manifest as $service => $metadata) {
            if (count($generatedServices) > 0 && in_array($metadata['namespace'], $generatedServices, true) === false) {
                continue;
            }

            $this->createModel($metadata['namespace'], $service, $metadata['versions']['latest']);

            if ($noProgress === false) {
                $io->progressAdvance();
                usleep(5000);
            }
        }

        if ($noProgress === false) {
            $io->progressFinish();
        }

        return Command::SUCCESS;
    }

    /**
     * @return array<string, Manifest>
     */
    private function getManifest(): array
    {
        /** @var array<string, Manifest> */
        return \Aws\manifest();
    }

    private function getModelsDirectory(): string
    {
        $sdkDir = InstalledVersions::getInstallPath('aws/aws-sdk-php');
        if ($sdkDir === null) {
            throw new \RuntimeException('aws/aws-sdk-php is not installed');
        }

        return "{$sdkDir}/src/data";
    }

    /**
     * @return Data
     */
    private function getData(string $service, string $version): array
    {
        $path = "{$this->modelsDirectory}/{$service}/{$version}/api-2.json.php";

        /** @var Data */
        return include_once $path;
    }

    private function createModel(string $service, string $namespace, string $version): void
    {
        $data = $this->getData($namespace, $version);

        $classNamespace = "{$this->namespacePrefix}\\{$service}";

        $generator = new Generator($data, $classNamespace);
        $generator->run(function (string $fqcn, string $code) {
            $this->output("{$this->outputDirectory}/{$this->getFqcnToFilename($fqcn)}", $code);
        });
    }

    private function getFqcnToFilename(string $fqcn): string
    {
        return str_replace(["{$this->namespacePrefix}\\", '\\'], ['', '/'], $fqcn) . '.php';
    }

    private function output(string $filename, string $data): void
    {
        $this->createParentDirectory($filename);

        $result = file_put_contents($filename, $data);
        if ($result === false || $result === 0) {
            throw new \RuntimeException("Failed to write file: {$filename}");
        }
    }

    private function createParentDirectory(string $filename): void
    {
        $directory = dirname($filename);
        if (is_dir($directory) === false && mkdir($directory, 0755, true) === false) {
            throw new \RuntimeException("Failed to create directory: {$directory}");
        }
    }
}
