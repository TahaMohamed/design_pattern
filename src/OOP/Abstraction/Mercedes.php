<?php

namespace App\OOP\Abstraction;

class Mercedes extends Car
{

    public function move(): int
    {
        return $this->speed * 2;
    }

    public function turnOn(): bool
    {
        $this->turnedOn = true;
        return true;
    }

    public function turnOff(): bool
    {
        $this->turnedOn = false;
        return true;
    }

    public function accelerate(int $speed): bool
    {
        $this->speed = $speed * 50;
        return true;
    }

    public function park(): bool
    {
        return true;
    }
}