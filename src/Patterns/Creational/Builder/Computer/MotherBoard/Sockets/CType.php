<?php

namespace App\Patterns\Creational\Builder\Computer\MotherBoard\Sockets;

class CType
{
    private bool $withVideoTransfer;

    /**
     * @param bool $withVideoTransfer
     */
    public function __construct(bool $withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }

    public function getWithVideoTransfer(): bool
    {
        return $this->withVideoTransfer;
    }


}
