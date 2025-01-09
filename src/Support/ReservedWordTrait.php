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
        'fn',       // >= PHP 7.4
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
        'match',    // >= PHP 8.0
        'namespace',
        'new',
        'or',
        'print',
        'private',
        'protected',
        'public',
        'readonly', // >= PHP 8.1.0
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

        // https://www.php.net/manual/reserved.classes.php
        'self',
        'static',
        'parent',

        // https://www.php.net/manual/reserved.other-reserved-words.php
        'int',
        'float',
        'bool',
        'string',
        'true',
        'false',
        'null',
        'void',     // >= PHP 7.1
        'iterable', // >= PHP 7.1
        'object',   // >= PHP 7.2
        'mixed',    // >= PHP 8.0
        'never',    // >= PHP 8.1
    ];

    public function isReservedWord(string $name): bool
    {
        return in_array(strtolower($name), $this->reserved, true);
    }
}
