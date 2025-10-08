<?php

namespace Sunaoka\Aws\Structures\Generator;

use Nette\PhpGenerator\Parameter;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;
use Sunaoka\Aws\Structures\Generator\PhpGenerator\Printer;
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
     * @param callable(string $fqcn, string $code, string $type): void $callback
     */
    public function generate(callable $callback): void
    {
        $namespace = $this->getNamespace();

        $className = $this->getTraitName();
        $code = $this->generatePhpTrait($namespace, $className);
        $callback("{$namespace}\\{$className}", $code, 'trait');

        if ($this->parser->request !== null) {
            $className = $this->getRequestClassName();
            $code = $this->generatePhpClass($this->parser->request, $namespace, Request::class, $className);
            $callback("{$namespace}\\{$className}", $code, 'request');
        }

        if ($this->parser->response !== null) {
            $className = $this->getResponseClassName();
            $code = $this->generatePhpClass($this->parser->response, $namespace, Response::class, $className);
            $callback("{$namespace}\\{$className}", $code, 'response');
        }

        foreach ($this->parser->shapes as $shapeName) {
            $className = $this->getShapeClassName($shapeName);
            $code = $this->generatePhpClass($shapeName, "{$namespace}\\Shapes", Shape::class, $className);
            $callback("{$namespace}\\Shapes\\{$className}", $code, 'shape');
        }
    }

    protected function generatePhpTrait(string $namespace, string $className): string
    {
        $phpNamespace = new PhpNamespace($namespace);
        $class = $phpNamespace->addTrait($className);

        $comments = [];

        $method = $class->addMethod($this->getMethodName());

        if ($this->parser->request !== null) {
            $parameter = new Parameter('args');
            $parameter->setType("{$this->getNamespace()}\\{$this->getRequestClassName()}");
            $method->setParameters([$parameter]);
            $comments[] = "@param {$this->getRequestClassName()} \$args";
        }

        if ($this->parser->request !== null && $this->parser->response !== null) {
            // [x] request / [x] response
            $body = [
                "\$result = parent::{$this->getMethodName()}(\$args->toArray());",
                "return new {$this->getResponseClassName()}(\$result->toArray());",
            ];
            $comments[] = "@return {$this->getResponseClassName()}";

        } elseif ($this->parser->request === null && $this->parser->response !== null) {
            // [ ] request / [x] response
            $body = [
                "\$result = parent::{$this->getMethodName()}();",
                "return new {$this->getResponseClassName()}(\$result->toArray());",
            ];
            $comments[] = "@return {$this->getResponseClassName()}";

        } elseif ($this->parser->request !== null && $this->parser->response === null) {
            // [x] request / [ ] response
            $body = [
                "parent::{$this->getMethodName()}(\$args->toArray());",
            ];
            $comments[] = '@return void';

        } else {
            // [ ] request / [ ] response
            $body = [
                "parent::{$this->getMethodName()}();",
            ];
            $comments[] = '@return void';
        }

        $method->setBody(implode("\n", $body));
        $method->setComment(implode("\n", $comments));

        return $this->getPhpCode($phpNamespace);
    }

    protected function generatePhpClass(string $shapeName, string $namespace, string $extends, string $className): string
    {
        $phpNamespace = new PhpNamespace($namespace);
        $phpNamespace->addUse($extends);

        $class = $phpNamespace->addClass($className);
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
            $isRequired = ($extends === Response::class && $type === '\Psr\Http\Message\StreamInterface')
                || in_array($name, $shape['required'] ?? [], true);

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

        return new Printer()->printFile($file);
    }

    private function getShapeClassName(string $name): string
    {
        return $this->parser->structures->get($name);
    }

    private function resolveClassName(string $name, string $namespace): string
    {
        $className = $this->parser->types->has($name)
            ? $this->parser->types->get($name)
            : "Shapes\\{$this->getShapeClassName($name)}";

        if (str_contains($className, 'Shapes\\') && str_ends_with($namespace, '\Shapes')) {
            return str_replace('Shapes\\', '', $className);
        }

        return $className;
    }

    private function getNamespace(): string
    {
        return "{$this->namespace}\\{$this->parser->action}";
    }

    private function getTraitName(): string
    {
        return "{$this->parser->action}Trait";
    }

    private function getRequestClassName(): string
    {
        return "{$this->parser->action}Request";
    }

    private function getResponseClassName(): string
    {
        return "{$this->parser->action}Response";
    }

    private function getMethodName(): string
    {
        return lcfirst($this->parser->action);
    }
}
