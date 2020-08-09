<?php

namespace strategy;

/**
 * 交通方式
 */
interface TransportStrategyInterface
{
    public function goToPlace(String $place);
}
