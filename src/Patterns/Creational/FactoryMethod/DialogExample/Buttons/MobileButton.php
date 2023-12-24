<?php

namespace App\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class MobileButton extends Button
{
    public function show(): string
    {
        return '<UIButton>Click Here</UIButton>';
    }
    public function click(): void
    {
        //Any Operation Here
    }
}