<?php

namespace App\Patterns\Creational\Builder\Contracts;

use App\Patterns\Creational\Builder\Computer\UPS;

interface IUPS
{
    public function buildUPS(): UPS;
}