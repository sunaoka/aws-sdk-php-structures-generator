<?php

namespace Sunaoka\Aws\Structures\Generator;

use Nette\PhpGenerator\Parameter;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\PsrPrinter;
use Sunaoka\Aws\Structures\Request;
use Sunaoka\Aws\Structures\Response;
use Sunaoka\Aws\Structures\Shape;

readonly class Model
{
    public function __construct(
        private Parser $parser,
        private string $namespace,
    ) {
        $parser->parse();
    }

    /**
     * @param callable(string $fqcn, string $code): void $callback
     */
    public function generate(callable $callback): void
    {
        $action = $this->parser->action;

        if ($this->parser->request !== null) {
            $shapeName = $this->parser->request;
            $namespace = "{$this->namespace}\\{$action}";
            $className = "{$action}Request";
            $code = $this->generatePhpCode($shapeName, $namespace, Request::class, $className);
            $callback("{$namespace}\\{$className}", $code);
        }

        if ($this->parser->response !== null) {
            $shapeName = $this->parser->response;
            $namespace = "{$this->namespace}\\{$action}";
            $className = "{$action}Response";
            $code = $this->generatePhpCode($shapeName, $namespace, Response::class, $className);
            $callback("{$namespace}\\{$className}", $code);
        }

        foreach ($this->parser->shapes as $shapeName) {
            $namespace = "{$this->namespace}\\{$action}\\Shapes";
            $code = $this->generatePhpCode($shapeName, $namespace, Shape::class);
            $callback("{$namespace}\\{$this->getClassName($shapeName)}", $code);
        }
    }

    protected function generatePhpCode(string $shapeName, string $namespace, string $extends, ?string $className = null): string
    {
        $phpNamespace = new PhpNamespace($namespace);
        $phpNamespace->addUse($extends);

        $class = $phpNamespace->addClass($className ?? $this->getClassName($shapeName));
        $class->setExtends($extends);

        $shape = $this->parser->data['shapes'][$shapeName];

        if (! isset($shape['members']) || count($shape['members']) <= 0) {
            return $this->getPhpCode($phpNamespace);
        }


        $required = $shape['required'] ?? [];
        $params = [];
        foreach ($shape['members'] as $name => $member) {
            $params[$name] = $this->resolveClassName($member['shape'], $namespace);
        }

        /** @var array<string, array{type: string, null: string, nullable: bool}> $properties */
        $properties = [];
        foreach ($params as $name => $type) {
            $isRequired = in_array($name, $shape['required'] ?? [], true);
            $properties[$name] = [
                'type' => $type . ($isRequired ? '' : '|null'),
                'null' => $isRequired ? '' : '?',
            ];
        }

        if ($extends !== Response::class) {
            $comments = [];
            foreach ($properties as $name => $property) {
                $comments[] = sprintf('%s%s: %s', $name, $property['null'], $property['type']);
            }

            $parameter = new Parameter('args');
            $parameter->setType('array');
            if (count($required) === 0) {
                $parameter->setDefaultValue([]);
            }

            if (count($comments) === 1) {
                $comment = sprintf('@param array{%s} $args', $comments[0]);
            } else {
                $comment = sprintf("@param array{\n    %s\n} \$args", implode(",\n    ", $comments));
            }

            $class
                ->addMethod('__construct')
                ->addComment($comment)
                ->setParameters([$parameter])
                ->setBody('$this->__data = $args;')
            ;
        }

        $comments = [];
        foreach ($properties as $name => $property) {
            $comments[] = sprintf('@property %s $%s', $property['type'], $name);
        }

        $class->setComment(implode("\n", $comments));

        return $this->getPhpCode($phpNamespace);
    }

    private function getPhpCode(PhpNamespace $phpNamespace): string
    {
        $file = new PhpFile();
        $file->addNamespace($phpNamespace);

        return new PsrPrinter()->printFile($file);
    }

    private function getClassName(string $name): string
    {
        return $this->parser->structures->get($name);
    }

    private function resolveClassName(string $name, string $namespace): string
    {
        $className = $this->parser->types->has($name)
            ? $this->parser->types->get($name)
            : "Shapes\\{$this->getClassName($name)}";

        if (str_contains($className, 'Shapes\\') && str_ends_with($namespace, '\Shapes')) {
            return str_replace('Shapes\\', '', $className);
        }

        return $className;
    }
}
