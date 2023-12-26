<?php

namespace App\Patterns\Creational\Builder\Computer\MotherBoard\Sockets;

class USB
{
    private string $version;

    /**
     * @param string $version
     */
    public function __construct(string $version)
    {
        $this->version = $version;
    }

    public function getVersion(): string
    {
        return $this->version;
    }


}
