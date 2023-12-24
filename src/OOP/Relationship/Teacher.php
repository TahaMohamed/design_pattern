<?php

namespace App\OOP\Relationship;

use App\OOP\Relationship\Printer\Printer;

class Teacher
{
    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayWelcome(Printer $printer):string
    {
        $printer->setTextToPrint($this->name);
        return $printer->printToScreen();
    }
}