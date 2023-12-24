<?php

namespace App\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class WebButton extends Button
{
    public function show(): string
    {
        return '<div><button>Click Here</button></div>';
    }
    public function click(): void
    {
        //Any Operation Here
    }
}