<?php

namespace abstract_factory\MacbookAir;

class MacAir256 extends MacAir
{
    public function __construct()
    {
        $this->setSsdSpace(256);
    }
}
