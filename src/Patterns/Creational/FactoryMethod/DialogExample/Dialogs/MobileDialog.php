<?php

namespace App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs;

use App\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;
use App\Patterns\Creational\FactoryMethod\DialogExample\Buttons\MobileButton;

class MobileDialog extends Dialog
{
    public function createButton(): Button
    {
        return new MobileButton();
    }

}