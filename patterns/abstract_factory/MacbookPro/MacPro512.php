<?php

namespace abstract_factory\MacbookPro;

class MacPro512 extends MacPro
{
    public function __construct()
    {
        $this->setSsdSpace(512);
    }
}
