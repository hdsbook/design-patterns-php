<?php

namespace adapter\shape;

use adapter\shape3d\Ball3d;

class Ball implements ShapeInterface
{
    private $adaptee;

    public function __construct()
    {
        $this->adaptee = new Ball3d();
    }

    public function draw()
    {
        $this->adaptee->print3d();
    }
}
