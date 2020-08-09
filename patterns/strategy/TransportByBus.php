<?php

namespace strategy;

use strategy\TransportStrategyInterface;

class TransportByBus implements TransportStrategyInterface
{
    public function goToPlace(string $place)
    {
        return " 搭巴士 去 {$place}";
    }
}
