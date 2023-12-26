<?php

namespace App\Patterns\Creational\Builder\Computer;

class Mouse
{
    private bool $withExtraUtilities;

    /**
     * @param bool $withExtraUtilities
     */
    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }

    public function getWithExtraUtilities(): bool
    {
        return $this->withExtraUtilities;
    }

}