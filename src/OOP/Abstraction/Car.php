<?php

namespace App\OOP\Abstraction;

use App\OOP\Encapsulation\CarDashboard;

abstract class Car
{
    protected int $speed;
    protected int $numberOfDoors;
    protected string $gearBoxSystem;
    protected string $color;
    protected bool $turnedOn = false;

    private CarDashboard $dashboard;
    /**
     * @param int $speed
     * @param int $numberOfDoors
     * @param string $gearBoxSystem
     * @param string $color
     */
    public function __construct(int $speed, int $numberOfDoors, string $gearBoxSystem, string $color)
    {
        $this->speed = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->gearBoxSystem = $gearBoxSystem;
        $this->color = $color;
    }


    abstract public function move(): int;
    abstract public function turnOn(): bool;
    abstract public function turnOff(): bool;
    abstract public function accelerate(int $speed): bool;
    abstract public function park(): bool;

    public function installDashboard(CarDashboard $dashboard): void
    {
        $this->dashboard = $dashboard;
    }

    public function carInfo(): string
    {
        return $this->dashboard?->statistics() ?? 'This car does not have a dashboard';
    }
}