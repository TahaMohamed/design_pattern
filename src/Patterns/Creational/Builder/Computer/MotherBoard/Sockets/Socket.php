<?php

namespace App\Patterns\Creational\Builder\Computer\MotherBoard\Sockets;

class Socket
{
    private array $types;

    /**
     * @param array $types
     */
    public function __construct(array $types)
    {
        $this->types = $types;
    }

    public function getTypes(): array
    {
        return $this->types;
    }

}