<?php

namespace App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs;

use App\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;

abstract class Dialog
{
    abstract public function createButton(): Button; //Factory Method

    public function renderDialog(): string
    {
        $button = $this->createButton();

        return "
        ##################### \n
        {$button->show()} \n
        ##################### \n
        <br/>";
    }
}