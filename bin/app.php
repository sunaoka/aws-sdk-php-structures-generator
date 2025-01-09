#!/usr/bin/env php
<?php

declare(strict_types=1);

use Sunaoka\Aws\Structures\Generator\Kernel;

require dirname(__DIR__) . '/src/bootstrap.php';

try {
    $app = new Kernel();
    $app->run();
} catch (Throwable $e) {
    echo PHP_EOL, $e->getMessage(), PHP_EOL;

    exit(0 === $e->getCode() ? 255 : $e->getCode());
}
