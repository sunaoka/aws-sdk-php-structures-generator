<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator\PhpGenerator;

class Printer extends \Nette\PhpGenerator\Printer
{
    public int $wrapLength = PHP_INT_MAX;
    public string $indentation = '    ';
    public int $linesBetweenMethods = 1;
    public int $linesBetweenUseTypes = 1;
    public bool $singleParameterOnOneLine = true;
}
