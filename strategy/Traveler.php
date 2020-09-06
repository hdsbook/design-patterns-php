<?php

namespace strategy;

use strategy\TransportStrategyInterface;

class Traveler
{

    protected $name;

    /**
     * 交通方式
     *
     * @var TransportStrategyInterface
     */
    protected $transMethod;

    public function __construct($name, TransportStrategyInterface $transMethod)
    {
        $this->name = $name;
        $this->transMethod = $transMethod;
    }

    public function travelTo($place)
    {
        echo $this->name . ' 選擇' . $this->transMethod->goToPlace($place) . '<br>';
    }
}
