<?php

namespace App\OOP\Relationship\Printer;

class PlainTextPrinter extends Printer
{
    public function printToScreen():string
    {
        return "This is a plain text format of the string {$this->stringToBePrinted}";
    }

    public function setTextToPrint(string $text): void
    {
        $this->stringToBePrinted = $text;
    }
}