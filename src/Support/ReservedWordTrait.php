<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator\Support;

trait ReservedWordTrait
{
    /**
     * @var list<string>
     */
    private array $reserved = [
        // https://www.php.net/manual/reserved.keywords.php
        // PHP Keywords
        '__halt_compiler',
        'abstract',
        'and',
        'array',
        'as',
        'break',
        'callable',
        'case',
        'catch',
        'class',
        'clone',
        'const',
        'continue',
        'declare',
        'default',
        'die',
        'do',
        'echo',
        'else',
        'elseif',
        'empty',
        'enddeclare',
        'endfor',
        'endforeach',
        'endif',
        'endswitch',
        'endwhile',
        'eval',
        'exit',
        'extends',
        'final',
        'finally',
        'fn', // (as of PHP 7.4)
        'for',
        'foreach',
        'function',
        'global',
        'goto',
        'if',
        'implements',
        'include',
        'include_once',
        'instanceof',
        'insteadof',
        'interface',
        'isset',
        'list',
        'match', // (as of PHP 8.0)
        'namespace',
        'new',
        'or',
        'print',
        'private',
        'protected',
        'public',
        'readonly', // (as of PHP 8.1.0)
        'require',
        'require_once',
        'return',
        'static',
        'switch',
        'throw',
        'trait',
        'try',
        'unset',
        'use',
        'var',
        'while',
        'xor',
        'yield',
        'yield from',
        // Compile-time constants
        '__CLASS__',
        '__DIR__',
        '__FILE__',
        '__FUNCTION__',
        '__LINE__',
        '__METHOD__',
        '__PROPERTY__',
        '__NAMESPACE__',
        '__TRAIT__',

        // https://www.php.net/manual/reserved.classes.php
        // Standard Defined Classes
        'Directory',
        'stdClass',
        '__PHP_Incomplete_Class',
        'Exception',
        'ErrorException',
        'php_user_filter',
        'Closure',
        'Generator',
        'ArithmeticError',
        'AssertionError',
        'DivisionByZeroError',
        'Error',
        'Throwable',
        'ParseError',
        'TypeError',
        // Special classes
        'self',
        'static',
        'parent',

        // https://www.php.net/manual/reserved.other-reserved-words.php
        // Reserved words
        'int',
        'float',
        'bool',
        'string',
        'true',
        'false',
        'null',
        'void', // (as of PHP 7.1)
        'iterable', // (as of PHP 7.1)
        'object', // (as of PHP 7.2)
        'mixed', // (as of PHP 8.0)
        'never', // (as of PHP 8.1)
        // Soft reserved words
        'enum',
        'resource',
        'numeric',
    ];

    public function isReservedWord(string $name): bool
    {
        return in_array(strtolower($name), $this->reserved, true);
    }
}
