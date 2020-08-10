<?php

namespace abstract_factory;

use abstract_factory\MacbookAir\MacAir;
use abstract_factory\MacbookAir\MacAir256;
use abstract_factory\MacbookPro\MacPro;
use abstract_factory\MacbookPro\MacPro256;

class Mac256Factory implements MacFactory
{
    public function produceMacPro(): MacPro
    {
        return new MacPro256();
    }

    public function produceMacAir(): MacAir
    {
        return new MacAir256();
    }
}
