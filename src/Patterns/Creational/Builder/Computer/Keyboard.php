<?php

namespace App\Patterns\Creational\Builder\Computer;

class Keyboard
{
    private bool $utfSupport;

    /**
     * @param bool $utfSupport
     */
    public function __construct(bool $utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }

    public function getUtfSupport(): bool
    {
        return $this->utfSupport;
    }

}