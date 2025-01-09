<?php

declare(strict_types=1);

if (! function_exists('base_path')) {
    function base_path(string $path = '', string $constant = 'BASE_PATH'): string
    {
        if (! defined($constant)) {
            throw new LogicException("{$constant} is missing");
        }

        // @phpstan-ignore cast.string
        return ((string) constant($constant)) . ($path !== '' ? DIRECTORY_SEPARATOR . $path : $path);
    }
}
