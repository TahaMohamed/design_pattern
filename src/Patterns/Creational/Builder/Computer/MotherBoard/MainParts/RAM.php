<?php

namespace App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;

class RAM
{
    private int $size;

    /**
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }

}