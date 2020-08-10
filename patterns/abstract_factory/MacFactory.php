<?php

namespace abstract_factory;

use abstract_factory\MacbookAir\MacAir;
use abstract_factory\MacbookPro\MacPro;

interface MacFactory
{
    public function produceMacPro(): MacPro;

    public function produceMacAir(): MacAir;
}
