<?php

namespace App\Patterns\Creational\Builder\Builders;

use App\Patterns\Creational\Builder\Builder;
use App\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\Patterns\Creational\Builder\Computer\Keyboard;
use App\Patterns\Creational\Builder\Computer\Monitor;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use App\Patterns\Creational\Builder\Computer\MotherBoard\Sockets\CType;
use App\Patterns\Creational\Builder\Computer\MotherBoard\Sockets\Socket;
use App\Patterns\Creational\Builder\Computer\MotherBoard\Sockets\USB;
use App\Patterns\Creational\Builder\Computer\Mouse;
use App\Patterns\Creational\Builder\Computer\Types\Computer;
use App\Patterns\Creational\Builder\Computer\Types\ComputerCS;
use App\Patterns\Creational\Builder\Contracts\ICoolingSystem;

class ComputerCSBuilder extends Builder implements ICoolingSystem
{

    protected function buildMotherBoard(): MotherBoard
    {
        $cpu = new CPU(2.8);
        $ram = new RAM(16);
        $gpu = new GPU(2);
        $sockets = new Socket([
            new USB(2),
            new USB(3),
            new CType(true),
            new CType(true),
            new CType(true)
        ]);

        $networkCard = new NetworkCard(5);
        $disk = new Disk('SSD');
        return new MotherBoard($cpu, $ram, $gpu, $sockets, $networkCard, $disk);
    }

    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard(true);
    }

    protected function buildMouse(): Mouse
    {
        return new Mouse(true);
    }

    protected function buildMonitor(): Monitor
    {
        return new Monitor('1080 HD');
    }

    public function buildCoolingSystem(): CoolingSystem
    {
        return new CoolingSystem(5);
    }

    public function getComputer(): Computer
    {
        $computer = new ComputerCS();
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setMouse($this->buildMouse());
        $computer->setMotherboard($this->buildMotherBoard());
        $computer->setCoolingSystem($this->buildCoolingSystem());
        return $computer;
    }


}