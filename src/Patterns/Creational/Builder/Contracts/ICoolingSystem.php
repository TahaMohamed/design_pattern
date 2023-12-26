<?php

namespace App\Patterns\Creational\Builder\Contracts;

use App\Patterns\Creational\Builder\Computer\CoolingSystem;

interface ICoolingSystem
{
    public function buildCoolingSystem(): CoolingSystem;
}