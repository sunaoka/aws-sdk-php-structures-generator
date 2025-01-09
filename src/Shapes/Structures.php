<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator\Shapes;

class Structures
{
    public Aliases $aliases;

    /**
     * @var list<string>
     */
    private array $data = [];

    public function __construct()
    {
        $this->aliases = new Aliases();
    }

    public function add(string $value): void
    {
        $this->data[] = $value;
    }

    public function has(string $value): bool
    {
        return in_array($value, $this->data, true);
    }

    public function get(string $value): string
    {
        return $this->aliases->get($value);
    }
}
