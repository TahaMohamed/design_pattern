<?php

namespace App\OOP\Relationship\Printer;

class HtmlPrinter extends Printer
{
    public function printToScreen():string
    {
        return "<h1>This is a Html format of the string {$this->stringToBePrinted}</h1>";
    }

    public function setTextToPrint(string $text): void
    {
        $this->stringToBePrinted = $text;
    }
}