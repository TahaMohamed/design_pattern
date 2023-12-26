<?php

namespace App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;

class NetworkCard
{
    private string $category;

    /**
     * @param string $category
     */
    public function __construct(string $category)
    {
        $this->category = $category;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

}