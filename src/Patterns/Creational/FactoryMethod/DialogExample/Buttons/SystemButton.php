<?php

namespace App\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class SystemButton extends Button
{
    public function show(): string
    {
        return '# Click Here #';
    }
    public function click(): void
    {
        //Any Operation Here
    }
}