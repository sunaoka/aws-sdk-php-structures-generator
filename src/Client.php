<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator;

use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\PsrPrinter;

readonly class Client
{
    /**
     * @param string[] $traits
     */
    public function __construct(
        private string $namespace,
        private array $traits,
    ) {}

    /**
     * @param callable(string $fqcn, string $code): void $callback
     */
    public function generate(callable $callback): void
    {
        $service = basename(str_replace('\\', '/', $this->namespace));

        $code = $this->generatePhpClass($this->namespace, $service);
        $callback("{$this->namespace}\\{$this->getClassName($service)}", $code);
    }

    private function generatePhpClass(string $namespace, string $service): string
    {
        $className = $this->getClassName($service);

        $phpNamespace = new PhpNamespace($namespace);
        $class = $phpNamespace->addClass($className);
        $class->setExtends("\\Aws\\{$service}\\{$className}");

        foreach ($this->traits as $trait) {
            $class->addTrait($trait);
        }

        return $this->getPhpCode($phpNamespace);
    }

    private function getPhpCode(PhpNamespace $phpNamespace): string
    {
        $file = new PhpFile();
        $file->addNamespace($phpNamespace);

        return new PsrPrinter()->printFile($file);
    }

    private function getClassName(string $service): string
    {
        return "{$service}Client";
    }
}
