<?php

namespace App\OOP\Relationship\Printer;

abstract class Printer
{
    protected string $stringToBePrinted;

    abstract public function setTextToPrint(string $text):void;
    abstract public function printToScreen():string;
}