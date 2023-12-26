<?php

namespace App\Patterns\Creational\Builder;

use App\Patterns\Creational\Builder\Computer\Keyboard;
use App\Patterns\Creational\Builder\Computer\Monitor;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use App\Patterns\Creational\Builder\Computer\Mouse;
use App\Patterns\Creational\Builder\Computer\Types\Computer;

abstract class Builder
{
    protected Computer $computer;

    abstract protected function buildMotherBoard(): MotherBoard;
    abstract protected function buildKeyboard(): Keyboard;
    abstract protected function buildMouse(): Mouse;
    abstract protected function buildMonitor(): Monitor;

    abstract public function getComputer(): Computer;
}