<?php

namespace App\Patterns\Creational\Builder\Computer\Types;

use App\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\Patterns\Creational\Builder\Computer\Types\Contracts\ICoolingSystem;
use App\Patterns\Creational\Builder\Computer\Types\Contracts\IPower;
use App\Patterns\Creational\Builder\Computer\UPS;

class ComputerXL extends Computer implements ICoolingSystem, IPower
{
    private CoolingSystem $coolingSystem;
    private UPS $ups;

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

    public function backupPower(): bool
    {
        return true;
    }

    public function setCoolingSystem(CoolingSystem $coolingSystem): void
    {
        $this->coolingSystem = $coolingSystem;
    }

    public function setUps(UPS $ups): void
    {
        $this->ups = $ups;
    }

    public function getCoolingSystem(): CoolingSystem
    {
        return $this->coolingSystem;
    }

    public function getUps(): UPS
    {
        return $this->ups;
    }
}
