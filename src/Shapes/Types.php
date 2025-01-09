<?php

declare(strict_types=1);

namespace Sunaoka\Aws\Structures\Generator\Shapes;

class Types
{
    /**
     * @param array<string, string> $data
     */
    public function __construct(
        private array $data = [],
    ) {}

    public function add(string $key, string $value): void
    {
        $this->data[$key] = $value;
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $this->data);
    }

    public function get(string $key): string
    {
        if ($this->has($key)) {
            return $this->data[$key];
        }

        throw new \InvalidArgumentException("{$key} is not found.");
    }

    /**
     * @return array<string, string>
     */
    public function all(): array
    {
        ksort($this->data);

        return $this->data;
    }
}
