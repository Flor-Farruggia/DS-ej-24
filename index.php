<?php

require_once 'modals/car.php';

$c = new Car();
$c->setMark('Ford');
$c->setModel('Fiesta');
$c->setVersion('SE');
$c->setYear(2018);
$c->showData();