<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator\Shapes;

use Sunaoka\Aws\Structures\Generator\Support\ReservedWordTrait;

class Aliases
{
    use ReservedWordTrait;

    /**
     * @var array<string, string>
     */
    private array $data = [];

    public function add(string $value): void
    {
        if ($this->isReservedWord($value)) {
            $this->data[$value] = "{$value}Shape";
        }
    }

    public function get(string $value): string
    {
        return $this->data[$value] ?? $value;
    }
}
