<?php

namespace App\OOP\Inheritance;

class Client
{
    public function __construct(public string $source, public int $timeout)
    {
    }

    public function connect(): string
    {
        return "I am connecting to {$this->source}";
    }

    public function call(string $url): string
    {
        $fullUrl = $this->source . '/' . $url;
        return "I have fetched this data for you from {$fullUrl}";
    }

    public function terminate(): bool
    {
        return true;
    }
}