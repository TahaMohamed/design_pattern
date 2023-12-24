<?php

use App\OOP\Abstraction\BMW;
use App\OOP\Abstraction\Mercedes;
use App\OOP\Abstraction\Order;
use App\OOP\Encapsulation\CarDashboard;
use App\OOP\Relationship\Printer\HtmlPrinter;
use App\OOP\Relationship\Teacher;
use App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs\MobileDialog;
use App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs\SystemDialog;
use App\Patterns\Creational\FactoryMethod\DialogExample\Dialogs\WebDialog;

require_once __DIR__ . '/../vendor/autoload.php';

//$bmw = new BMW(320, 2, 'Front', 'Black');
//$bmwDashboard = new CarDashboard(20, 40, 20);
//$bmw->installDashboard($bmwDashboard);
//$mercedes = new Mercedes(335, 2, 'Back', 'White');
//
//$order1 = new Order('Cairo', 'Alex', 120);
//$order2 = new Order('Suhag', 'Aswan', 320);
//
//var_dump($order1->deliverOrder($bmw));
//echo "<br/>";
//var_dump($bmw->carInfo());
//echo "<br/>";
//var_dump($order2->deliverOrder($mercedes));
//
////INHERITANCE
//$httpClient = new \App\OOP\Inheritance\HttpClient('google.com', 2000);
//echo "<br/>";
//var_dump($httpClient->connect());
//echo "<br/>";
//var_dump($httpClient->call('users'));
//echo "<br/>";
//var_dump($httpClient->terminate());


//$mohamed = new Teacher('Mohamed');
//var_dump($mohamed->sayWelcome(new HtmlPrinter));

$webDialog = new WebDialog();
var_dump($webDialog->renderDialog());
$mobileDialog = new MobileDialog();
var_dump($mobileDialog->renderDialog());
$systemDialog = new SystemDialog();
var_dump($systemDialog->renderDialog());