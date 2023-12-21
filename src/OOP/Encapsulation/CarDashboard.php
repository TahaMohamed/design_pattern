<?php

namespace App\OOP\Encapsulation;

class CarDashboard
{
    private int $oilLevel;
    private int $fuelLevel;
    private int $airPressure;

    /**
     * @param int $oilLevel
     * @param int $fuelLevel
     * @param int $airPressure
     */
    public function __construct(int $oilLevel, int $fuelLevel, int $airPressure)
    {
        $this->oilLevel = $oilLevel;
        $this->fuelLevel = $fuelLevel;
        $this->airPressure = $airPressure;
    }


    private function getOilLevel(): int
    {
        return $this->oilLevel;
    }

    private function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    private function getAirPressure(): int
    {
        return $this->airPressure;
    }

    public function statistics(): string
    {
        return <<<ANALYSIS
            Showing the following analysis:
            Fuel: {$this->getFuelLevel()}
            Oil: {$this->getOilLevel()}
            Air Pressure: {$this->getAirPressure()}
        ANALYSIS;
    }
}