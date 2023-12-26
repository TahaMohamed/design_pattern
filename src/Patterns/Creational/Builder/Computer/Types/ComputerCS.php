<?php

namespace App\Patterns\Creational\Builder\Computer\Types;

use App\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\Patterns\Creational\Builder\Computer\Types\Contracts\ICoolingSystem;

class ComputerCS extends Computer implements ICoolingSystem
{
    private CoolingSystem $coolingSystem;

    public function turnOn(): bool
    {
        return true;
    }
    public function turnOff(): bool
    {
        return true;
    }

    public function coolDown(): bool
    {
        // Do Something
        return true;
    }

    public function setCoolingSystem(CoolingSystem $coolingSystem): void
    {
        $this->coolingSystem = $coolingSystem;
    }

    public function getCoolingSystem(): CoolingSystem
    {
        return $this->coolingSystem;
    }
}
