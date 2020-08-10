<?php

namespace abstract_factory\MacbookAir;

class MacAir512 extends MacAir
{
    public function __construct()
    {
        $this->setSsdSpace(512);
    }
}
