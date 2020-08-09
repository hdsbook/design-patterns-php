<?php

require __DIR__ . '../../autoload.php';

use strategy\Traveler;
use strategy\TransportByBus;
use strategy\TransportByTrain;

$takeBusStrategy = new TransportByBus();
$takeTrainStrategy = new TransportByTrain();

$busTraveler = new Traveler('阿里巴巴', $takeBusStrategy);
$trainTraveler = new Traveler('動力火車', $takeTrainStrategy);

$busTraveler->travelTo('台北');
$trainTraveler->travelTo('台北');
