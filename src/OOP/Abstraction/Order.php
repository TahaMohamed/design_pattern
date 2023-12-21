<?php

namespace App\OOP\Abstraction;

class Order
{
    private string $source;
    private string $destination;
    private string $weight;

    /**
     * @param string $source
     * @param string $destination
     * @param string $weight
     */
    public function __construct(string $source, string $destination, string $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }

    public function deliverOrder(Car $car): string
    {
        $this->carOperation($car);
        return "I am moving from {$this->source} to {$this->destination} to deliver a package of {$this->weight} K.G";
    }

    private function carOperation(Car $car): void
    {
        $car->turnOn();
        $car->move();
        $car->accelerate(120);
        $car->park();
        $car->turnOff();
    }
}