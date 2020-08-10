<?php

namespace abstract_factory\MacbookPro;

class MacPro256 extends MacPro
{
    public function __construct()
    {
        $this->setSsdSpace(256);
    }
}
