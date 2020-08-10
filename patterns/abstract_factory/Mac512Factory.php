<?php

namespace abstract_factory;

use abstract_factory\MacbookAir\MacAir;
use abstract_factory\MacbookAir\MacAir512;
use abstract_factory\MacbookPro\MacPro;
use abstract_factory\MacbookPro\MacPro512;

class Mac512Factory implements MacFactory
{
    public function produceMacPro(): MacPro
    {
        return new MacPro512();
    }

    public function produceMacAir(): MacAir
    {
        return new MacAir512();
    }
}
