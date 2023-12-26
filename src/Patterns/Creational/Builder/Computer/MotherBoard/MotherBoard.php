<?php

namespace App\Patterns\Creational\Builder\Computer\MotherBoard;

use App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use App\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use App\Patterns\Creational\Builder\Computer\MotherBoard\Sockets\Socket;

class MotherBoard
{
    public function __construct(private CPU $cpu, private RAM $ram, private GPU $gpu, private Socket $socket, private NetworkCard $networkCard, private Disk $disk)
    {
    }

    public function getCpu(): CPU
    {
        return $this->cpu;
    }

    public function getRam(): RAM
    {
        return $this->ram;
    }

    public function getGpu(): GPU
    {
        return $this->gpu;
    }

    public function getSocket(): Socket
    {
        return $this->socket;
    }

    public function getNetworkCard(): NetworkCard
    {
        return $this->networkCard;
    }

    public function getDisk(): Disk
    {
        return $this->disk;
    }

}