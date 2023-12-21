<?php

use App\OOP\Abstraction\BMW;
use App\OOP\Abstraction\Mercedes;
use App\OOP\Abstraction\Order;
use App\OOP\Encapsulation\CarDashboard;

require_once __DIR__ . '/../vendor/autoload.php';

$bmw = new BMW(320, 2, 'Front', 'Black');
$bmwDashboard = new CarDashboard(20, 40, 20);
$bmw->installDashboard($bmwDashboard);
$mercedes = new Mercedes(335, 2, 'Back', 'White');

$order1 = new Order('Cairo', 'Alex', 120);
$order2 = new Order('Suhag', 'Aswan', 320);

var_dump($order1->deliverOrder($bmw));
echo "<br/>";
var_dump($bmw->carInfo());
echo "<br/>";
var_dump($order2->deliverOrder($mercedes));